<?php

namespace App\Http\Controllers;

use App\Models\Participation;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;
use Response;
use Cache;
use DB;
use File;

class AdminController extends Controller
{
  /* PARTICIPATIONS */
  public function participations()
  {
      $participations = Participation::paginate(15);
      return view('admin.participations', ['participations' => $participations]);
  }

    public function editParticipation($id = null)
  {
      $participation = Participation::where('id', $id )->first();
      return view('admin.participations.edit', ['participation' => $participation]);
  }

  public function deleteParticipation( $id = null)
  {
      $participation = Participation::where('id', $id )->first();

      if ($participation) {
          $participation->delete();
      }
     
      Cache::flush();
      return redirect()->route('admin.participations');
  }
  
  public function editParticipationAction(Request $request)
  {
      
      $newId = $request->input('id');
      $participation = false;
      if ($newId) {
          $participation = Participation::where('id', $newId)->first();
      }
      if (!$participation) {
          $participation = new Participation();
      }

      $participation->firstname = $request->input('firstname');
     
      $participation->lastname = $request->input('lastname');
      $participation->language = $request->input('language');
      $participation->email = $request->input('email');
      $participation->birthdate = $request->input('birthdate');
      $participation->ipaddress = $request->input('ipaddress');
      $participation->city = $request->input('city');
      $participation->origin = $request->input('origin');

      $participation->save();
      Cache::flush();
      return redirect()->route('admin.participations');
  }


  /* CONTENT */
  public function editContent()
  {
      $content = Content::first();
      return view('admin.content', ['content' => $content]);
  }
  
  public function editContentAction(Request $request)
  {
    
      $content = false;
      $content = Content::first();
     
      $content->fr_title = $request->input('fr_title');
      $content->fr_body1 = $request->input('fr_body1');

      $content->en_title = $request->input('en_title');
      $content->en_body1 = $request->input('en_body1');

      $content->nl_title = $request->input('nl_title');
      $content->nl_body1 = $request->input('nl_body1');
     
      $content->save();
      Cache::flush();
      return view('admin.content', ['content' => $content]);

  }
  
  public function get_csv(){

    $participations = Participation::get();

    // these are the headers for the csv file. Not required but good to have one incase of system didn't recongize it properly
    $headers = array(
      'Content-Type' => 'text/csv'
    );


    //I am storing the csv file in public >> files folder. So that why I am creating files folder
    if (!File::exists(public_path()."/files")) {
        File::makeDirectory(public_path() . "/files");
    }

    //creating the download file
    $filename =  public_path("files/participations.csv");
    $handle = fopen($filename, 'w');

    //adding the first row
    fputcsv($handle, [
        "Firstname",
        "Lastname",
        "Email",
        "Language",
        "Birthdate",
        "IP",
        "City",
        "Origin"
    ]);

    //adding the data from the array
    foreach ($participations as $participation) {
        fputcsv($handle, [
            $participation->firstname,
            $participation->lastname,
            $participation->email,
            $participation->language,
            $participation->birthdate,
            $participation->ipaddress,
            $participation->city,
            $participation->origin
        ]);

    }
    fclose($handle);

    //download command
    return Response::download($filename, "participations.csv", $headers);
}



}




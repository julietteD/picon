<?php

namespace App\Http\Controllers;

use App\Models\Participation;
use App\Models\Content;
use App\Models\Pcontent;
use App\Models\Acontent;
use App\Models\Calendar;
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

    /* CALENDARS */
  public function calendars()
  {
      $calendars = Calendar::orderBy('orderElt')->paginate(15);
      return view('admin.calendars', ['calendars' => $calendars]);
  }

    public function editCalendar($id = null)
  {
      $calendar = Calendar::where('id', $id )->first();
      return view('admin.calendars.edit', ['calendar' => $calendar]);
  }

  public function deleteCalendar( $id = null)
  {
      $calendar = Calendar::where('id', $id )->first();

      if ($calendar) {
          $calendar->delete();
      }
     
      Cache::flush();
      return redirect()->route('admin.calendars');
  }
  
  public function editCalendarAction(Request $request)
  {
      
      $newId = $request->input('id');
      $calendar = false;
      if ($newId) {
          $calendar = Calendar::where('id', $newId)->first();
      }
      if (!$calendar) {
          $calendar = new Calendar();
      }

      $calendar->location = $request->input('location');
      $calendar->city = $request->input('city');
      $calendar->dateConcert = $request->input('dateConcert');
      $calendar->orderElt = $request->input('orderElt');
      $calendar->link = $request->input('link');

      $calendar->save();
      Cache::flush();
      return redirect()->route('admin.calendars');
  }


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
      $participation->question = $request->input('question');
      $participation->persons = $request->input('persons');
      $participation->newsletter = $request->input('newsletter');
      $participation->marketing = $request->input('marketing');

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
     

      $content->fr_title1 = $request->input('fr_title1');
      $content->en_title1 = $request->input('en_title1');
      $content->nl_title1 = $request->input('nl_title1');
      $content->fr_title2 = $request->input('fr_title2');
      $content->en_title2 = $request->input('en_title2');
      $content->nl_title2 = $request->input('nl_title2');
      $content->fr_title3 = $request->input('fr_title3');
      $content->en_title3 = $request->input('en_title3');
      $content->nl_title3 = $request->input('nl_title3');
      $content->fr_title4 = $request->input('fr_title4');
      $content->en_title4 = $request->input('en_title4');
      $content->nl_title4 = $request->input('nl_title4');
      $content->fr_body1 = $request->input('fr_body1');
      $content->en_body1 = $request->input('en_body1');
      $content->nl_body1 = $request->input('nl_body1');
      $content->fr_body2 = $request->input('fr_body2');
      $content->en_body2 = $request->input('en_body2');
      $content->nl_body2 = $request->input('nl_body2');
      $content->fr_body3 = $request->input('fr_body3');
      $content->en_body3 = $request->input('en_body3');
      $content->nl_body3 = $request->input('nl_body3');
      $content->fr_body4 = $request->input('fr_body4');
      $content->en_body4 = $request->input('en_body4');
      $content->nl_body4 = $request->input('nl_body4');
      $content->fr_body5 = $request->input('fr_body5');
      $content->en_body5 = $request->input('en_body5');
      $content->nl_body5 = $request->input('nl_body5');
      $content->fr_body6 = $request->input('fr_body6');
      $content->en_body6 = $request->input('en_body6');
      $content->nl_body6 = $request->input('nl_body6');
      $content->fr_body7 = $request->input('fr_body7');
      $content->en_body7 = $request->input('en_body7');
      $content->nl_body7 = $request->input('nl_body7');
      
     
      $content->save();
      Cache::flush();
      return view('admin.content', ['content' => $content]);

  }


  /* Policy CONTENT */
  public function editPcontent()
  {
      $content = Pcontent::first();
      return view('admin.pcontent', ['content' => $content]);
  }
  
  public function editPcontentAction(Request $request)
  {
    
      $content = false;
      $content = Pcontent::first();
     
      $content->fr_body = $request->input('fr_body');
      $content->en_body = $request->input('en_body');
      $content->nl_body = $request->input('nl_body');
     
      $content->save();
      Cache::flush();
      return view('admin.pcontent', ['content' => $content]);

  }


  /* About CONTENT */
  public function editAcontent()
  {
      $content = Acontent::first();
      return view('admin.acontent', ['content' => $content]);
  }
  
  public function editAcontentAction(Request $request)
  {
    
      $content = false;
      $content = Acontent::first();
     
      $content->fr_body = $request->input('fr_body');
      $content->en_body = $request->input('en_body');
      $content->nl_body = $request->input('nl_body');
     
      $content->save();
      Cache::flush();
      return view('admin.acontent', ['content' => $content]);

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
        "Marketing",
        "Newsletter",
        "Question",
        "Persons"
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
            $participation->marketing,
            $participation->newsletter,
            $participation->question,
            $participation->persons
        ]);

    }
    fclose($handle);

    //download command
    return Response::download($filename, "participations.csv", $headers);
}



}




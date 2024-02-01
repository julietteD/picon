<?php

namespace App\Http\Controllers;

use App\Models\Participation;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;
use Response;
use Cache;
use DB;

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
     

      $participation->save();
      Cache::flush();
      return redirect()->route('admin.participations');
  }

  




}




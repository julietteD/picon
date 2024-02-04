<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Participation;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Mail\ParticipationService;
use Mail;
use App;
use Session;

class ParticipationController extends Controller
{

    public function setLocaleLang(Request $request){
      
      
          // Save selected Locale to current "Session"
          $locale = $request->locale ?? 'en';
          // App::setLocale($locale); --> There is no need for this here, as the middleware will run after the redirect() where it has already been set.
          $request->session()->put('locale', $locale);
 
          return redirect()->back();
    }

    public function welcome(){
        $content = Content::first();
        return view('welcome', ['content' => $content]);

    }
    public function participate(Request $request): View
    {
        /*Mail::raw('Hello, this is a test mail!', function ($message) {
            $message->to('juliette.delpech@gmail.com')->subject('Test Mail');
        });*/

      
        $content = Content::first();

        $validatedData = $request->validate([
            'birthdate'=> 'required|date|before: -18 years',
            'firstname'=> 'required',
            'lastname'=> 'required',
            'language'=> 'in:fr,nl,en',
            'email' => 'required|email',
            'city'=> 'required'
           ]);
    

        $ip = isset($_SERVER['HTTP_CLIENT_IP']) 
        ? $_SERVER['HTTP_CLIENT_IP'] 
        : (isset($_SERVER['HTTP_X_FORWARDED_FOR']) 
        ? $_SERVER['HTTP_X_FORWARDED_FOR'] 
        : $_SERVER['REMOTE_ADDR']);


       $participation = new Participation();

        
        $participation->firstname = $request->input('firstname');
        $participation->lastname = $request->input('lastname');
        $participation->language = $request->input('language');
        $participation->email = $request->input('email');
        $participation->birthdate = $request->input('birthdate');
        $participation->ipaddress = $ip;
        $participation->city = $request->input('city');
        $participation->origin = $request->input('origin');
  
        $participation->save();

          //Once validated, process the mail
          if (!empty($validatedData)) {
            $formData = [
                'language' => $request->input('language'),
                'email' => $request->input('email'),
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname')
            ];
            $recipientEmail = 'juliette.delpech@gmail.com';
            Mail::to($recipientEmail)->send(new ParticipationService($formData));
        }

        return view('welcome', [ 'reply' => 'success', 'content' => $content]);

        
    }

   
}

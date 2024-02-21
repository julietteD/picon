<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Pcontent;
use App\Models\Acontent;
use App\Models\Calendar;
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
        $calendars = Calendar::orderBy('orderElt')->get();
        return view('welcome', ['content' => $content, 'calendars' => $calendars]);

    }
    public function privacy(){
        $content = Pcontent::first();
        return view('privacy', ['content' => $content]);

    }
    public function about(){
        $content = Acontent::first();
        return view('about', ['content' => $content]);
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
            'email' => 'required|email|unique:participations',
            'question'=> 'required',
            'persons'=> 'required',
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
        $participation->question = $request->input('question');
        $participation->persons = $request->input('persons');
        $participation->newsletter = $request->input('newsletter');
        $participation->marketing = $request->input('marketing');

        $saved = $participation->save();
      

          //Once validated, process the mail
          if (!empty($validatedData) && $saved) {
           
            $formData = [
                'language' => $request->input('language'),
                'email' => $request->input('email'),
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname')
            ];
            $recipientEmail = $request->input('email');
            Mail::to($recipientEmail)->send(new ParticipationService($formData));
        }
        $calendars = Calendar::orderBy('orderElt')->get();
        return view('welcome', [ 'reply' => 'success', 'content' => $content, 'calendars' => $calendars]);

        
    }

   
}

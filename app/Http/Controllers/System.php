<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lang;
use App;
use Config;
use Auth;
use Log;

class System extends Controller
{  

  public function system(){

    Log::info('[System]');

    if (Auth::check()==false) {
      // The user is not logged in...
      return redirect('/');
    }
     $title = Config::get('app.name');
     $lang = Config::get('app.locale');
     $lang = App::getLocale();
     $lang = Lang::getLocale();

     return view('layouts.system.home',["title" => $title, "lang" => $lang]);
   }

   public function timezone(){

     Log::info('[Timezone]');

     if (Auth::check()==false) {
       abort(403, 'Unauthorized action.');
     }
     $bmsuuh = App\Bmsuuh::all();
     return json_encode($bmsuuh);
   }

   public function language(){

     Log::info('[Language]');

     if (Auth::check()==false) {
       abort(403, 'Unauthorized action.');
     }
     $bmsidi = App\Bmsidi::all();
     return json_encode($bmsidi);
   }

   public function configuration(Request $request){

     Log::info('[Configuration]');

     if (Auth::check()==false) {
       abort(403, 'Unauthorized action.');
     }

     if($request->isMethod('post')) {
       Log::info('[Configuration][Post]');
       $params = $request->input('params');
       $timezone = $params['timezone'];
       $language = $params['language'];
       Log::info('[Configuration][Post][Params] Language: ' . $language . ' Timezone: ' . $timezone);
       $bmsusr = App\Bmsusr::updateUsrConf($timezone, $language);
       if($bmsusr==1)
         $responseJSON = new App\library\VO\responseJSON(Lang::get('messages.successTrue'),Lang::get('messages.BDsuccess'));
       else
         $responseJSON = new App\library\VO\responseJSON(Lang::get('messages.successFalse'),Lang::get('messages.errorsBDRepeat'));
       return json_encode($responseJSON);
     } else {
       abort(403, 'Unauthorized action.');
     }
   }

   public function profile(){

    Log::info('[Profile]');

    if (Auth::check()==false) {
       // The user is not logged in...
       abort(403, 'Unauthorized action.');
     }

     $title = Lang::get('messages.profileTitle');
     $lang = Config::get('app.locale');
     $lang = App::getLocale();
     $lang = Lang::getLocale();

     return view('layouts.system.profile',["title" => $title, "lang" => $lang]);
   }
    
   public function saveProfile(){

    Log::info('[saveProfile]');

    if (Auth::check()==false) {
       // The user is not logged in...
       abort(403, 'Unauthorized action.');
     }
   }
}

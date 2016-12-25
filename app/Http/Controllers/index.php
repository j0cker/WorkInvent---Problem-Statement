<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lang;
use App;
use Config;
use Auth;
use Illuminate\Support\Facades\Log;

class Index extends Controller
{  

  /*Index Landing Page*/

  public function index(){

    Log::info('[Index]');

    if (Auth::check()) {
      // The user is logged in...
      return redirect('home');
    }
     $title = Config::get('app.name');
     $lang = Config::get('app.locale');
     //$lang = App::getLocale();
     //$lang = Lang::getLocale();

     return view('index',["title" => $title, "lang" => $lang]);
   }

   /*Subscribe*/

   public function subscribe(Request $request){

     Log::info('[Subscribe]');

     if($request->isMethod('post')) {
       Log::info('[Subscribe][Post]');
       $params = $request->input('params');
       $email = $params['email'];
       return $email;
     } else {

     }

   }


   /*Reset Password*/
   public function reset($token){
     
     Log::info('[Reset]');

     if (Auth::check()) {
        // The user is logged in...
        Auth::logout();
      }

      $title = Config::get('app.name');
      $lang = Config::get('app.locale');

      return view('layouts.index.reset',["title" => $title, "lang" => $lang, "token" => $token]);
   }

   /*Email Verification*/

   public function verify($verification_code){

      Log::info('[Verify]');

      if (Auth::check()) {
        // The user is logged in...
        Auth::logout();
      }

      $bmsusr = App\Bmsusr::verify($verification_code)->get();

      $title = Config::get('app.name');
      $lang = Config::get('app.locale');

      if($bmsusr->first()){
        if($bmsusr->first()->verified==1){
          return view('layouts.index.verification',["title" => $title, "lang" => $lang, "verify" => Lang::get('messages.wasVerified')]);
        } else {
          $addVerify = App\Bmsusr::addVerify($verification_code);
          if($addVerify==1){
            return view('layouts.index.verification',["title" => $title, "lang" => $lang, "verify" => Lang::get('messages.verified')]);
          } else {
            return view('layouts.index.verification',["title" => $title, "lang" => $lang, "verify" => Lang::get('messages.errorsBD')]);
          }
        }
      } else {
        return view('layouts.index.verification',["title" => $title, "lang" => $lang, "verify" => Lang::get('messages.notVerified')]);
      }

   }
    //
}

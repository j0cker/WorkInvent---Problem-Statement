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

   public function subirImagen(Request $request){

      Log::info('[subirImagen]');

      if (Auth::check()==false) {
        // The user is not logged in...
        abort(403, 'Unauthorized action.');
      }

     if($request->isMethod('post')) {
       Log::info('[subirImagen][Post]');
       
       if($request->hasFile('fileImage')){
          if ($request->file('fileImage')->isValid()) {
            $path = $request->fileImage->path();
            $extension = $request->fileImage->extension();
            Log::info('[subirImagen][Post][Valid] Path: '.$path.' Extension: '.$extension.'');
            $path = $request->fileImage->store('public/images');
            $path = str_replace('public','',$path);
            Log::info('[subirImagen][Post][Valid] Path: '.$path.'');
            $responseJSON = new App\library\VO\responseJSON(Lang::get('messages.successTrue'),$path);
            return json_encode($responseJSON);

          } else {
            $responseJSON = new App\library\VO\responseJSON(Lang::get('messages.successFalse'),Lang::get('messages.errorsBD'));
            return json_encode($responseJSON);
          }//fin isValid
       } else {
         $responseJSON = new App\library\VO\responseJSON(Lang::get('messages.successFalse'),Lang::get('messages.errorsBD'));
         return json_encode($responseJSON);
       }//fin hasFIle
     } else {
       $responseJSON = new App\library\VO\responseJSON(Lang::get('messages.successFalse'),Lang::get('messages.errorsBD'));
       return json_encode($responseJSON);
     }//fin method


   }

   public function actualizarImageProfile(Request $request){

     Log::info('[actualizarImageProfile]');

     if (Auth::check()==false) {
       // The user is not logged in...
       abort(403, 'Unauthorized action.');
     }

     if($request->isMethod('post')) {
       Log::info('[actualizarImageProfile][Post]');
       $params = $request->input('params');
       $imageUrl = $params['imageUrl'];
       $bmsusr = App\Bmsusr::actualizarImageProfile($imageUrl);
       if($bmsusr==1){
         $responseJSON = new App\library\VO\responseJSON(Lang::get('messages.successTrue'),'');
         return json_encode($responseJSON);
       } else {
         $responseJSON = new App\library\VO\responseJSON(Lang::get('messages.successFalse'),Lang::get('messages.errorsBD'));
         return json_encode($responseJSON);
       }
     } else {
       $responseJSON = new App\library\VO\responseJSON(Lang::get('messages.successFalse'),Lang::get('messages.errorsBD'));
       return json_encode($responseJSON);
     }//fin method
   }
    
   public function saveProfile(Request $request){

    Log::info('[saveProfile]');

    if (Auth::check()==false) {
       // The user is not logged in...
       abort(403, 'Unauthorized action.');
     }

     if($request->isMethod('post')) {
       Log::info('[saveProfile][Post]');
       $params = $request->input('params');
       $name = $params['name'];
       $email = $params['email'];
       $timezone = $params['timezone'];
       $language = $params['language'];
       $pswd = $params['pswd'];

       if(!$pswd){
          Log::info('[saveProfile][Post][All][WithoutPass]');
          $bmsusr = App\Bmsusr::allUpdateUsrConfWithoutPass($name, $email, $timezone, $language);
          if($bmsusr==1){
            $mail = new App\library\classes\sendMails($params);
            $mail->verificationCompare();

            $responseJSON = new App\library\VO\responseJSON(Lang::get('messages.successTrue'),'Without Pass');
            return json_encode($responseJSON);
          } else {
            $responseJSON = new App\library\VO\responseJSON(Lang::get('messages.successFalse'),Lang::get('messages.errorsBD'));
            return json_encode($responseJSON);
          }
       } else {
         Log::info('[saveProfile][Post][All]');
         $bmsusr = App\Bmsusr::allUpdateUsrConf($name, $email, $timezone, $language, $pswd);
          if($bmsusr==1){
            $responseJSON = new App\library\VO\responseJSON(Lang::get('messages.successTrue'),'With Pass');
            return json_encode($responseJSON);
          } else {
            $responseJSON = new App\library\VO\responseJSON(Lang::get('messages.successFalse'),Lang::get('messages.errorsBD'));
            return json_encode($responseJSON);
          }
       }
     } else {
       $responseJSON = new App\library\VO\responseJSON(Lang::get('messages.successFalse'),Lang::get('messages.errorsBD'));
       return json_encode($responseJSON);
     }//fin method
   }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lang;
use App;
use Config;
use Auth;
use Log;

class Demo extends Controller
{  

  public function demo(){
    
    Log::info('[Demo][demo]');

    if (!Auth::attempt(['correo_user' => 'demo', 'password_user' => sha1('demo')])) {    
      Log::info('[Demo][demo] Login demo user False');
      abort(403, 'Unauthorized action.');
    } 

    Log::info('[Demo][demo] Login demo user True');  

    $user = Auth::user();

    Log::info('[Demo][demo] user: '. $user);

    $lang = $this->getLanguage();

    $priv = $this->privileges(); //json_decode

    $title = Config::get('app.name');

    return view('layouts.demo.home',["title" => $title, "lang" => $lang, "priv" => $priv]);
  }

  public function customMail(Request $request){

      Log::info('[Demo][customMail]');

      if (Auth::check()==false) {
        // The user is not logged in...
        abort(403, 'Unauthorized action.');
      }
      
     if($request->isMethod('post')) {
       
       Log::info('[customMail][Post]');

       $params = $request->input('params');
       $params['user_id'] = Auth::id();

       $mail = new \App\library\classes\queueMails($params);
       $mail->customMail();
       
       $responseJSON = new App\library\VO\responseJSON(Lang::get('messages.successTrue'),Lang::get('messages.BDsuccess'));
     } else {
       $responseJSON = new App\library\VO\responseJSON(Lang::get('messages.successFalse'),Lang::get('messages.errorsBDRepeat'));
     }

     return json_encode($responseJSON);
  }

  public function adminGetScopeTarget(){

    Log::info('[Demo][AdminGetScopeTarget]');

    if (Auth::check()==false) {
      // The user is not logged in...
      return redirect('/');
    }

    $bmstipo = App\Bmstipo::all();

    return json_decode($bmstipo);

  }

  public function adminTotals(){

    Log::info('[Demo][AdminTotals]');

    if (Auth::check()==false) {
      // The user is not logged in...
      return redirect('/');
    }

    $collection = collect([]);

    $bmsusr = App\Bmsusr::count();
    $bmsuuh = App\Bmsuuh::count();
    $bmsmail = App\Bmsmail::count();
    $bmsusrVerified = App\Bmsusr::getVerifiedUsers()->get();
    $bmsmidi = App\Idioma::count();
    $bmspud = App\Bmspud::countDistinct()->get();
    $bmstipo = App\Bmstipo::count();
    $bmsust = App\Bmsust::count();
    $bmsusrPaid = App\Bmsusr::getPaidUsers()->get();

    $collection->put('totalUsers', $bmsusr);
    $collection->put('totalTimeZone', $bmsuuh);
    $collection->put('totalQueueMails', $bmsmail);
    $collection->put('totalMailsVerified', count($bmsusrVerified));
    $collection->put('totalIdioms', $bmsmidi);
    $collection->put('totalRoles', count($bmspud));
    $collection->put('totalPlans', $bmstipo);
    $collection->put('totalSubscribers', $bmsust);
    $collection->put('totalUsersPaying', count($bmsusrPaid));

    return json_encode($collection);

  }

  public function admin(){

    Log::info('[Demo][Admin]');

    if (Auth::check()==false) {
      // The user is not logged in...
      return redirect('/');
    }

    $lang = $this->getLanguage();

    $priv = $this->privileges(); //json_decode

    if($priv[0]->N_PERNAME!=Lang::get("messages.admin")){
        abort(403, 'Unauthorized action.');
    }

    $title = Lang::get('messages.adminTitle');

    return view('layouts.system.admin',["title" => $title, "lang" => $lang, "priv" => $priv]);

  }

  public function privileges(){

    Log::info('[Demo][Privileges]');

    $bmsuper = App\Bmsuper::lookFor(Auth::user()->id)->get();

    $bmsuper = json_decode($bmsuper,true);

    if($bmsuper){

        Log::info('[Privileges] Priv: '.$bmsuper[0]["I_PUDID"]);
        $bmspud = App\Bmspud::lookFor($bmsuper[0]["I_PUDID"])->get();
        $bmspud = json_decode($bmspud);
        return $bmspud;
    }

    return null;

  }

   public function timezone(){

     Log::info('[Demo][Timezone]');

     if (Auth::check()==false) {
       abort(403, 'Unauthorized action.');
     }
     $bmsuuh = App\Bmsuuh::all();
     return json_encode($bmsuuh);
   }

   public function getLanguage(){

     Log::info('[Demo][getLanguage]');

     $functions = new App\library\util\functions();
     $lang = $functions->getUserLanguage();
     $Idioma = App\Idioma::lookUp()->get();

     if($Idioma){
       $Idioma=json_decode($Idioma);
       if($Idioma){
         Log::info('[Demo][ProfileIdiom] '.print_r($Idioma[0]->N_VALUE,true));
         App::setLocale($Idioma[0]->N_VALUE);
         $lang = $Idioma[0]->N_VALUE;
       }
     }

     return $lang;
   }

   public function language(){

     Log::info('[Demo][Language]');

     if (Auth::check()==false) {
       abort(403, 'Unauthorized action.');
     }
     $Idioma = App\Idioma::all();
     return json_encode($Idioma);
   }

   public function configuration(Request $request){

     Log::info('[Demo][Configuration]');

     if (Auth::check()==false) {
       abort(403, 'Unauthorized action.');
     }

     if($request->isMethod('post')) {
       Log::info('[Demo][Configuration][Post]');
       $params = $request->input('params');
       $timezone = $params['timezone'];
       $language = $params['language'];
       Log::info('[Demo][Configuration][Post][Params] Language: ' . $language . ' Timezone: ' . $timezone);
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

    Log::info('[Demo][Profile]');

    if (Auth::check()==false) {
       // The user is not logged in...
       abort(403, 'Unauthorized action.');
     }

     $lang = $this->getLanguage();

     $priv = $this->privileges(); //json_decode

     $title = Lang::get('messages.profileTitle');
     
     //$lang = Config::get('app.locale');
     //$lang = App::getLocale();
     //$lang = Lang::getLocale();

     return view('layouts.system.profile',["title" => $title, "lang" => $lang, "priv" => $priv]);
   }

   public function subirImagen(Request $request){

      Log::info('[Demo][subirImagen]');

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

     Log::info('[Demo][actualizarImageProfile]');

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

    Log::info('[Demo][saveProfile]');

    if (Auth::check()==false) {
       // The user is not logged in...
       abort(403, 'Unauthorized action.');
     }

     if($request->isMethod('post')) {
       Log::info('[Demo][saveProfile][Post]');
       $params = $request->input('params');
       $name = $params['name'];
       $email = $params['email'];
       $timezone = $params['timezone'];
       $language = $params['language'];
       $pswd = $params['pswd'];

       if(!$pswd){

          Log::info('[Demo][saveProfile][Post][All][WithoutPass]');

          $bmsusrId = App\Bmsusr::getUser()->get()->all();
          $bmsusrId = json_decode(json_encode($bmsusrId));

          $bmsusr = App\Bmsusr::allUpdateUsrConfWithoutPass($name, $email, $timezone, $language);
          if($bmsusr==1 && $bmsusrId){

            $params['mail_previous'] = $bmsusrId[0]->email;
            $params['user_id'] = Auth::id();

            $mail = new \App\library\classes\queueMails($params);
            $mail->verificationCompare();

            $responseJSON = new App\library\VO\responseJSON(Lang::get('messages.successTrue'),'Without Pass');
            return json_encode($responseJSON);
          } else {
            $responseJSON = new App\library\VO\responseJSON(Lang::get('messages.successFalse'),Lang::get('messages.errorsBD'));
            return json_encode($responseJSON);
          }
       } else {

         Log::info('[Demo][saveProfile][Post][All]');

         $bmsusrId = App\Bmsusr::getUser()->get()->all();
         $bmsusrId = json_decode(json_encode($bmsusrId));

         $bmsusr = App\Bmsusr::allUpdateUsrConf($name, $email, $timezone, $language, $pswd);
         if($bmsusr==1 && $bmsusrId){

            $params['mail_previous'] = $bmsusrId[0]->email;
            $params['user_id'] = Auth::id();

            $mail = new App\library\classes\queueMails($params);
            $mail->verificationCompare();

            $mail = new App\library\classes\queueMails($params);
            $mail->newPassword();

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

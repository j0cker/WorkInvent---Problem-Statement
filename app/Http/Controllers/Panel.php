<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lang;
use App;
use Config;
use Auth;

class Panel extends Controller
{  

  public function panel(){
    if (Auth::check()==false) {
      // The user is logged in...
      return redirect('/');
    }
     //$title = Config::get('app.name');
     //$lang = Config::get('app.locale');
     //$lang = App::getLocale();
     //$lang = Lang::getLocale();

     //return view('index',["title" => $title, "lang" => $lang]);
   }
    //
}

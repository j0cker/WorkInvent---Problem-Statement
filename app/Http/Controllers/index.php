<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lang;
use App;
use Config;

class index extends Controller
{  public function index(){
     $title = "101Errors";
     $lang = Config::get('app.locale');
     //$lang = App::getLocale();
     //$lang = Lang::getLocale();
     return view('index',["title" => $title, "lang" => $lang]);
   }
    //
}

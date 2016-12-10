<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lang;
use App;
use Config;
use DB;

class index extends Controller
{  public function index(){
     $title = Config::get('app.name');
     $lang = Config::get('app.locale');
     //$lang = App::getLocale();
     //$lang = Lang::getLocale();

     $users = DB::select('select * from bmsusr');

     return view('index',["title" => $title, "lang" => $lang]);
   }
    //
}

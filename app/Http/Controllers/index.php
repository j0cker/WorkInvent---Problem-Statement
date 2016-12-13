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

  public function index(){

    Log::info('[Index]');

    if (Auth::check()) {
      // The user is logged in...
      return redirect('panel');
    }
     $title = Config::get('app.name');
     $lang = Config::get('app.locale');
     //$lang = App::getLocale();
     //$lang = Lang::getLocale();

     return view('index',["title" => $title, "lang" => $lang]);
   }
    //
}

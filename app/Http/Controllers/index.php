<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index extends Controller
{  public function index(){
     $title = "101Errors";
     return view('index',["title" => $title]);
   }
    //
}

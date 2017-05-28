<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Config;
use App;
use Database;

class Idioma extends Model
{   
    protected $table = 'idioma';

    public function scopeLookUp($query){
        return $query->where('id_idioma', Auth::user()->I_IDIDI);
    }

}

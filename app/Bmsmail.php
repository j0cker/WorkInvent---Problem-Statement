<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bmsmail extends Model
{   protected $table = 'bmsmail';

    public $timestamps = true;
    //protected $dateFormat = 'U';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = null; 
    
    public function scopeLookFor($query, $email)
    {   return $query->where('email', $email);
    }

}

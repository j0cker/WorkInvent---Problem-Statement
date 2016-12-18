<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bmsusr extends Model
{   protected $table = 'bmsusr';
    
    public function scopeVerify($query, $verification_code)
    {   return $query->where('verification_code', $verification_code);
    }

    public function scopeAddVerify($query, $verification_code){
        return $query->where('verification_code', $verification_code)
                     ->update(['verified' => 1]);
    }

}

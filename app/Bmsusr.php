<?php

namespace App;

use Auth;
use Log;

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

    public function scopeUpdateUsrConf($query, $timezone, $language){
        Log::info('[scopeUpdateUsrConf] UserId: '.Auth::user()->id);
        return $query->where('id', Auth::user()->id)
                     ->update(['I_UHID' => $timezone, 'I_IDIDI' => $language]);
    }

    public function scopeActualizarImageProfile($query, $imageUrl){
        return $query->where('id', Auth::user()->id)
                     ->update(['X_UFOTO' => 'storage/'.$imageUrl]);
    }

}

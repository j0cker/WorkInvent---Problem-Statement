<?php

namespace App\library\classes;

use Illuminate\Support\Facades\Log;
use Mail;
use App;
use Config;
use Lang;

class queueMails
{   private $data;
    
    public function __construct($data = []){
        Log::info("[Mail][constructor]");
        $this->data = $data;
    }

    public function welcome(){

        Log::info("[Mail][welcome][queue]");

        $data = $this->data;

        $bmsmail = App\Bmsmail::addMailQueue($data['user_id'], 'emails.welcome', $data['email'], (int)Lang::get('messages.prioridadWelcome'), $data['name'], $data['password'], $data['verification_code']);
    }

    public function reset(){

        Log::info("[Mail][reset][queue]");

        $data = $this->data;

        $bmsmail = App\Bmsmail::addMailQueue($data['user_id'], 'emails.reset', $data['email'], (int)Lang::get('messages.prioridadReset'), '', $data['password'], '');
    }

    public function verificationCompare(){

        Log::info("[Mail][verificationCompare]");

        $data = $this->data;
    
        $bmsmail = App\Bmsmail::addMailQueue($data['user_id'], 'emails.verification', $data['email'], (int)Lang::get('messages.prioridadVerificationCompare'), $data['name'], $data['mail_previous'], '');

    }

    public function newPassword(){

        Log::info("[Mail][newPassword]");

        $data = $this->data;
    
        $bmsmail = App\Bmsmail::addMailQueue($data['user_id'], 'emails.password', $data['email'], (int)Lang::get('messages.prioridadPswd'), '', $data['pswd'], '');

    }
  
}
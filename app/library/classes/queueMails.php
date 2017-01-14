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

    public function verificationCompare($email){

        Log::info("[Mail][verificationCompare]");

        $data = $this->data;

        $verification_code = str_random(20);

        $bmsusrVer = App\Bmsusr::updateVerify($verification_code);

        Log::info('[saveProfile][Post][All][WithoutPass] emailBD: '.$email.' emailPost: '.$data["email"].'');

        if($email!=$data["email"]){

            if($bmsusrVer==1){
                $data["verification_code"] = $verification_code;

                Log::info("[Mail][verificationCompare][send]");

                Mail::send('emails.verification', $data, function($message) use ($data)
                {
                    $message->from(Config::get('mail.from.address'), Config::get('app.name'));
                    $message->subject(Lang::get('messages.emailVerification'));
                    $message->to($data['email']);
                });
                
            } else {
                Log::info("[Mail][verificationCompare][no send]");
            }
        } else {
            Log::info("[Mail][verificationCompare][no send]");
        }

    }
  
}
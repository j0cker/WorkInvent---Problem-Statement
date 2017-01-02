<?php

namespace App\library\classes;

use Illuminate\Support\Facades\Log;
use Mail;
use App;
use Config;
use Lang;

class sendMails
{   private $data;
    
    public function __construct($data = []){
        Log::info("[Mail][constructor]");
        $this->data = $data;
    }

    public function welcome(){

        Log::info("[Mail][welcome][send]");

        $data = $this->data;

        Mail::send('emails.welcome', $data, function($message) use ($data)
        {
            $message->from(Config::get('mail.from.address'), Config::get('app.name'));
            $message->subject(Lang::get('messages.emailWelcome'));
            $message->to($data['email']);
        });
    }

    public function reset(){

        Log::info("[Mail][reset][send]");

        $data = $this->data;

        Mail::send('emails.reset', $data, function($message) use ($data)
        {
            $message->from(Config::get('mail.from.address'), Config::get('app.name'));
            $message->subject(Lang::get('messages.emailReset'));
            $message->to($data['email']);
        });
    }

    public function verificationCompare(){

        Log::info("[Mail][verificationCompare]");

        $verification_code = str_random(20);

        $bmsusrVer = App\Bmsusr::updateVerify($verification_code);

        $bmsusrId = App\Bmsusr::getUser()->get()->all();
        $bmsusrId = json_decode(json_encode($bmsusrId));
        Log::info('[saveProfile][Post][All][WithoutPass] emailBD: '.$bmsusrId[0]->email.' emailPost: '.$data["email"].'');

        if($bmsusrId[0]->email!=$data["email"]){

            if($bmsusrVer==1){
                $data = $this->data;
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
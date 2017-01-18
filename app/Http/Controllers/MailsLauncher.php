<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lang;
use App;
use Config;
use Auth;
use Log;

class MailsLauncher extends Controller
{  

  public function mailsLauncher(){

    Log::info('[mailsLauncher]');

    $bmsmails = App\Bmsmail::all();

    $bmsmails = json_decode($bmsmails);

    if($bmsmails){
      Log::info('[mailsLauncher] Hay Mails para enviar');
      echo "Hay Mails para enviar";

      $c_mails = 0;

      foreach($bmsmails as $mail){

        if($mail->N_PLANTILLA=="emails.welcome"){

          Log::info('[mailsLauncher] Sending Welcome');

          $data['name'] = $mail->N_VAR1;
          $data['email'] = $mail->N_SEND_TO;
          $data['password'] = $mail->N_VAR2;
          $data['verification_code'] = $mail->N_VAR3;

          $mail_send = new \App\library\classes\sendMails($data);
          $mail_send->welcome();
          App\Bmsmail::where('I_MAIL', $mail->I_MAIL)->delete();
          $c_mails++;
        } else if($mail->N_PLANTILLA=="emails.reset"){

          Log::info('[mailsLauncher] Sending Reset');

          $data['email'] = $mail->N_SEND_TO;
          $data['password'] = $mail->N_VAR2;

          $mail_send = new \App\library\classes\sendMails($data);
          $mail_send->reset();
          App\Bmsmail::where('I_MAIL', $mail->I_MAIL)->delete();
          $c_mails++;
        } else if($mail->N_PLANTILLA=="emails.verification"){

          Log::info('[mailsLauncher] Sending Verification');

          $data['email'] = $mail->N_SEND_TO;
          $data['name'] = $mail->N_VAR1;
          $data['mail_previous'] = $mail->N_VAR2;

          $mail_send = new \App\library\classes\sendMails($data);
          $mail_send->verificationCompare();
          App\Bmsmail::where('I_MAIL', $mail->I_MAIL)->delete();
          $c_mails++;
        } else if($mail->N_PLANTILLA=="emails.password"){

          Log::info('[mailsLauncher] Sending Password');

          $data['email'] = $mail->N_SEND_TO;
          $data['pswd'] = $mail->N_VAR2;

          $mail_send = new \App\library\classes\sendMails($data);
          $mail_send->newPassword();
          App\Bmsmail::where('I_MAIL', $mail->I_MAIL)->delete();
          $c_mails++;
        } else if($mail->N_PLANTILLA=="emails.custom"){

          Log::info('[mailsLauncher] Sending Custom');

          $data['email'] = $mail->N_SEND_TO;
          $data['body'] = $mail->N_VAR1;
          $data['subject'] = $mail->N_VAR2;
          $data['name'] = $mail->N_VAR3;

          $mail_send = new \App\library\classes\sendMails($data);
          $mail_send->customMail();
          App\Bmsmail::where('I_MAIL', $mail->I_MAIL)->delete();
          $c_mails++;
        }
      }//fin foreach
      App\Bmsmail::getQuery()->delete();
      Log::info("[mailsLauncher] Total enviados: ".$c_mails."");
      echo "<br />";
      echo "Total enviados: ".$c_mails."";

    } else {
      Log::info('[mailsLauncher] No hay Mails para enviar');
      echo "No hay Mails para enviar";
    }
    
  }

}

<?php

return [
    //'title' => '101Errors', no es necesaria ya que se declara en config -> app.php -> name

    //form's' login, register, sendLinkPass, Reset Password
    'user' => 'User Name',
    'login' => 'Login',
    'register' => 'Register',
    'userormail' => 'User or Mail',
    'password' => 'Password',
    'confPassword' => 'Confirm Password',
    'logfacebook' => 'Login with Facebook',
    'signfacebook' => 'Sign up with Facebook',
    'permisosredes' => "Don't Worry. We don't publish anything without your permission and we don't save passwords.",
    'nameForm' => "Please enter your username",
    'passwordFormRequired' => "Please provide a password",
    'passwordFormMinLength' => "Your password must be at least 5 characters long",
    'mailForm' => "Please enter a valid email address",
    'ResetPassword' => "Reset your Password",
    'ResetPasswordButton' => "Send Password Reset Link",

    //verification
    'notVerified' => "The verification number doesn't exist",
    'verified' => "Your account has been verified",
    'wasVerified' => "Your account has already been verified previously",

    //emails
    'emailReset' => "Password reset Successfully",
    'emailWelcome' => "Welcome to ".Config::get('app.name')."",

    //errors
    'errorsBD' => "There was an error, please contact your administrator",
];
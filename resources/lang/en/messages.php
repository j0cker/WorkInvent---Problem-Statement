<?php

return [
    //'title' => '101Errors', no es necesaria ya que se declara en config -> app.php -> name

    //index
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
    'RememberMe' => "Remember Me",
    'Forgot' => "Forgot Your Password?",
    'keyPass' => 134343,

    //footer
    'Copyright' => "Copyright © 2016 BFC. All Rights Reserved.",

    //Subscribe
    'Subscribe' => "Subscribe",
    'SubscribeTxt' => "Subscribe to our newsletter to receive the latest news.",
    'privacy' => "We respect your email privacy.",
    'subscribeSuccess' => "An email to confirm your subscription has been sent.",

    //verification
    'notVerified' => "The verification number doesn't exist",
    'verified' => "Your account has been verified",
    'wasVerified' => "Your account has already been verified previously",

    //emails
    'emailVerification' => "Email Verification requiered",
    'emailReset' => "Password reset Successfully",
    'emailWelcome' => "Welcome to ".Config::get('app.name')."",

    //system titles
    'profileTitle' => "Profile",
    'adminTitle' => "Administration",

    //system
    'welcome' => "Welcome ",

    //configuration modal
    'confTitle' => "Fill in all the missing information in order to configure your profile and start using ".Config::get('app.name')."",
    'selectTimezone' => "Select your Timezone",
    'selectTimezoneSpan' => "Please select your Timezone",
    'selectLanguage' => "Select your Language",
    'selectLanguageSpan' => "Please select your Language",
    'continue' => "Continue",

    //configuration forms
    'timezoneForm' => "Please enter a valid Timezone",
    'languageForm' => "Please enter a valid Language",

    //system header menu
    'help' => "¿Need Help?",
    'profile' => "My profile",
    'home' => "Home",

    //System profile
    'headTitleProfile' => "My profile",
    'headTitleProfile2' => "Modify your profile characteristics",
    'changePicture' => "Change your photo",
    'changePicture2' => "of profile",
    'examinar' => "Examine&hellip;",
    'nameProfile' => "Name",
    'emailProfile' => "Email",
    'zonaHorarioProfile' => "Time zone",
    'idiomaProfile' => "Language",
    'contraseñaActualProfile' => "Current password",
    'olvidasteProfile' => "Did you forget your password?",
    'nuevaContraseñaProfile' => "New Password",
    'confirmarProfile' => "Confirm Password",
    'saveChangesProfile' => "Save changes",

    //System administrator

    //libraries
    'successTrue' => "TRUE",
    'successFalse' => "FALSE",

    //BD Messages and Errors
    'BDsuccess' => "The information was updated successfully",
    'errorsBD' => "There was an error, please contact your administrator",
    'errorsBDRepeat' => "This data already exists",
    'errorFormat' => "The file that you want to upload has a not valid format.",
];
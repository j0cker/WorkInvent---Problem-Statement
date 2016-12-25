<?php

return [
    //'title' => '101Errors', no es necesaria ya que se declara en config -> app.php -> name

    //index
    //form's' login and register
    'user' => 'Nombre de Usuario',
    'login' => 'Ingresar',
    'register' => 'Registrarse',
    'userormail' => 'Usuario o Mail',
    'password' => 'Contraseña',
    'confPassword' => 'Confirmar Password',
    'logfacebook' => 'Ingresar con Facebook',
    'signfacebook' => 'Iniciar con Facebook',
    'permisosredes' => 'No te preocupes. Nosotros no publicamos nada sin tu permiso y no almacenamos contraseñas.',
    'nameForm' => "Por favor proporcione un nombre de usuario",
    'passwordFormRequired' => "Por favor proporcione una contraseña",
    'passwordFormMinLength' => "La contrasña debe contener al menos 5 caracteres",
    'mailForm' => "Por favor proporcione una dirección de correo válida",
    'ResetPassword' => "Recuperar Contraseña",
    'ResetPasswordButton' => "Enviar link de reseteode password",
    'keyPass' => 134343,

    //footer
    'Copyright' => "Copyright © 2016 BFC. All Rights Reserved.",

    //Subscribe
    'Subscribe' => "Suscríbete",
    'SubscribeTxt' => "Suscríbete a nuestro boletín para recibir las últimas noticias.",
    'privacy' => "Respetamos su privacidad de correo electrónico.",

    //verification
    'notVerified' => "El número de verificación no existe",
    'verified' => "Tu cuenta ha sido verificada",
    'wasVerified' => "Tu cuenta ya ha sido verificada con anterioridad",

    //emails
    'emailReset' => "Nueva Contraseña",
    'emailWelcome' => "Bienvenido a ".Config::get('app.name')."",

    //system
    'welcome' => "Bienvenido ",

    //system header menu
    'help' => "¿Necesitas ayuda?",
    'profile' => "Mi perfil",
    'home' => "Inicio",

    //errors
    'errorsBD' => "Hubo un error por favor contacte al administrador",
];
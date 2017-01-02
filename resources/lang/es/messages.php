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
    'subscribeSuccess' => "Se ha enviado un correo electrónico para confirmar su suscripción.",

    //verification
    'notVerified' => "El número de verificación no existe",
    'verified' => "Tu cuenta ha sido verificada",
    'wasVerified' => "Tu cuenta ya ha sido verificada con anterioridad",

    //emails
    'emailVerification' => "Se requiere verificación de correo electrónico",
    'emailReset' => "Nueva Contraseña",
    'emailWelcome' => "Bienvenido a ".Config::get('app.name')."",

    //system titles
    'profileTitle' => "Perfil",

    //system
    'welcome' => "Bienvenido ",

    //configuration modal
    'confTitle' => "Complete toda la información faltante, para poder configurar su perfil y empezar a utilizar ".Config::get('app.name')."",
    'selectTimezone' => "Seleccione su zona horaria",
    'selectTimezoneSpan' => "Por favor seleccione su zona horaria",
    'selectLanguage' => "Seleccione su idioma",
    'selectLanguageSpan' => "Por favor seleccione su idioma",
    'continue' => "Continuar",
    
    //configuration forms
    'timezoneForm' => "Por favor proporcione una Zona Horaria",
    'languageForm' => "Por favor proporcione un Idioma",

    //system header menu
    'help' => "¿Necesitas ayuda?",
    'profile' => "Mi perfil",
    'home' => "Inicio",

    //System profile
    'headTitleProfile' => "Mi perfil",
    'headTitleProfile2' => "Modifica las características de tu perfil",
    'changePicture' => "Cambia tu foto",
    'changePicture2' => "de perfil",
    'examinar' => "Examinar&hellip;",
    'nameProfile' => "Nombre",
    'emailProfile' => "Correo electrónico",
    'zonaHorarioProfile' => "Zona Horaria",
    'idiomaProfile' => "Idioma",
    'contraseñaActualProfile' => "Contraseña actual",
    'olvidasteProfile' => "¿Olvidaste tu contraseña?",
    'nuevaContraseñaProfile' => "Nueva contraseña",
    'confirmarProfile' => "Confirmar contraseña",
    'saveChangesProfile' => "Guardar cambios",

    //libraries
    'successTrue' => "TRUE",
    'successFalse' => "FALSE",

    //BD Messages and Errors
    'BDsuccess' => "La información se actualizó correctamente",
    'errorsBD' => "Hubo un error por favor contacte al administrador",
    'errorsBDRepeat' => "Estos datos ya existen",
    'errorFormat' => "El archivo que desea cargar tiene un formato no válido.",
];
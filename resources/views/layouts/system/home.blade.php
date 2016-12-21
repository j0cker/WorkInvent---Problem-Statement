@extends('layouts.system.master')

  {{-- lang html tag --}}

  @section('lang'){{$lang}}@stop

  {{-- Title Head --}}

  @section('title'){{$title}}@stop

  {{-- Metatag Head --}}

  @section('Content-Type','text/html; charset=UTF-8')
  @section('x-ua-compatible','ie=100s')
  @section('description','')
  @section('author','Manlio Emiliano Terán Ramos')
  @section('viewport','width=device-width, initial-scale=1')

  {{-- Body --}}
  
  @section('content')

<!--Box Images-->
<script type="text/javascript" src="box-images/js/fresco.js"></script>
<link rel="stylesheet" type="text/css" href="box-images/css/fresco.css" />
<!--Fin Box Images->

<!--Material Design-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!--Fin Material Design-->

<!-- Custom -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="slider/flexslider.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/_style.css" rel="stylesheet" type="text/css">
<!-- Custom -->

<!-- calendar css -->
<link href='calendar/fullcalendar.css' rel='stylesheet' />
<!--  fin calendar  -->

<!--Bootstrap Tour-->
<link href="bootstrap/css/bootstrap-tour.min.css" rel="stylesheet">
<script src="bootstrap/js/bootstrap-tour.min.js"></script>
<link href="bootstrap/css/bootstrap-tour-standalone.min.css" rel="stylesheet">
<script src="bootstrap/js/bootstrap-tour-standalone.min.js"></script>
<!--Fin Bootstrap Tour-->

<!--Jquery UI like Datepicker, slider, spinner, etc-->
<script type="text/javascript" src="js/jQuery-UI-v1.11.2.js"></script>
<link rel="stylesheet" href="css/jQuery-UI-v1.11.2.css">

<!--Jquery UI Plugs-->
<!--$('#timepicker').timepicker({ 'scrollDefault': 'now', 'step': 15 });-->
<script type="text/javascript" src="js/timepicker.js"></script>
<link rel="stylesheet" href="css/timepicker.css">
<script src="slider/modernizr.js"></script>
<!--Fin Jquery UI Plugs-->

<!--Bootstrap-->
<script src="bootstrap/js/bootstrap-typeahead.js"></script>
<!--Fin Bootstrap-->

<!-- calendar -->
<script src='calendar/lib/moment.min.js'></script>
<script src='calendar/fullcalendar.min.js'></script>
<!--fin calendar-->

<!--   LiveChat    -->
<script type="text/javascript">
/*
    var LiveHelpSettings = {};
    LiveHelpSettings.server = 'www.<?PHP echo $_SERVER['HTTP_HOST']; ?>';
    LiveHelpSettings.embedded = true;
    (function($) {
        // JavaScript
        LiveHelpSettings.server = LiveHelpSettings.server.replace(/[a-z][a-z0-9+\-.]*:\/\/|\/livehelp\/*(\/|[a-z0-9\-._~%!$&'()*+,;=:@\/]*(?![a-z0-9\-._~%!$&'()*+,;=:@]))|\/*$/g, '');
        var LiveHelp = document.createElement('script'); LiveHelp.type = 'text/javascript'; LiveHelp.async = true;
        LiveHelp.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + LiveHelpSettings.server + '/livehelp/scripts/jquery.livehelp.min.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(LiveHelp, s);
    })(jQuery);
*/
</script>
<!--   LiveChat    -->

<!--Tag In
<link href="tag-it/css/jquery.css" rel="stylesheet" type="text/css">
<link href="tag-it/css/tagit.css" rel="stylesheet" type="text/css">
<script src="tag-it/js/tag-it.js" type="text/javascript" charset="utf-8"></script>-->
<!--Fin Tag In-->

<!-- analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66347903-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- fin analytics -->


<!--Materilized-->
<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>

<!--Font Awesome-->
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

<!-- Vendor CSS -->
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/material-design-iconic-font.min.css" rel="stylesheet">
  
<!-- CSS -->
<link href="css/app.min.1.css" rel="stylesheet">
<link href="css/app.min.2.css" rel="stylesheet">

<!--Font Brenda-->
<link href="font-brenda/style.css" rel="stylesheet">



<!--Feedback-->
<script>
var _vengage = _vengage || [];
$(document).ready(function(){
              (function(){
              var a, b, c;
              a = function (f) {
              return function () {
              _vengage.push([f].concat(Array.prototype.slice.call(arguments, 0)));
            };
          };
          b = ['load', 'addRule', 'addVariable', 'getURLParam', 'addRuleByParam', 'addVariableByParam', 'trackAction', 'submitFeedback', 'submitResponse', 'close', 'minimize', 'openModal', 'helpers'];
          for (c = 0; c < b.length; c++) {
          _vengage[b[c]] = a(b[c]);
        }
        var t = document.createElement('script'),
        s = document.getElementsByTagName('script')[0];
        t.async = true;
        t.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://s3.amazonaws.com/vetrack/init.min.js';
        s.parentNode.insertBefore(t, s);
        _vengage.push(['pubkey', '973b7689-4a5d-41b0-bbe7-9e2b9fa68b60']);
      })();
});
      </script>
<!--Fin Feedback-->

<!--Mercado Pago-->
<script type="text/javascript">
(function(){function $MPBR_load(){window.$MPBR_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = ("https:"==document.location.protocol?"https://www.mercadopago.com/org-img/jsapi/mptools/buttons/":"http://mp-tools.mlstatic.com/buttons/")+"render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPBR_loaded = true;})();}window.$MPBR_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPBR_load) : window.addEventListener('load', $MPBR_load, false)) : null;})();
</script>
<!--Fin Mercado Pago-->

<link type="text/css" href="css/escribir.css" rel="stylesheet" media="all" />
<script type="text/javascript" src="js/functions.js"></script>

<script>
$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
});
</script>
<script type="text/javascript">
//JQUERY
$(document).ready(function(){
  <?PHP
$c=0;
while($c!=12){
?>
    $('#tableSys<?PHP echo $c; ?>').click(function(){
      <?PHP
        if($c==1){
          ?>
            ga('send', 'event', 'Menu Izquierdo System', 'click', 'Menu Izquierdo System');
            window.location = "system.php";
          <?PHP
        } else if($c==2){
          ?>
            ga('send', 'event', 'Menu Izquierdo Escribir', 'click', 'Menu Izquierdo Escribir');
            window.location = "escribir.php";
          <?PHP
        } else if($c==3){
          ?>
            ga('send', 'event', 'Menu Izquierdo Calendario', 'click', 'Menu Izquierdo Calendario');
            window.location = "calendario.php";
          <?PHP
        } else if($c==4){
          ?>
            ga('send', 'event', 'Menu Izquierdo Responder', 'click', 'Menu Izquierdo Responder');
            window.location = "responder.php";
          <?PHP
        } else if($c==5){
          ?>
            ga('send', 'event', 'Menu Izquierdo Crm', 'click', 'Menu Izquierdo Crm');
            window.location = "/crm";
          <?PHP
        } else if($c==8){
          ?>
            ga('send', 'event', 'Menu Izquierdo Ayuda', 'click', 'Menu Izquierdo Ayuda');
            window.location = "ayuda.php";
          <?PHP
        }  else if($c==10){
          ?>
            ga('send', 'event', 'Menu Izquierdo Salir', 'click', 'Menu Izquierdo Salir');
            window.location = "twitter/clearsessions.php";
          <?PHP
        } else if($c==10){
           ?>
             ga('send', 'event', 'Menu Izquierdo Salir', 'click', 'Menu Izquierdo Salir');
             window.location = "twitter/clearsessions.php";
           <?PHP
        } else if($c==10){
          ?>
            ga('send', 'event', 'Menu Izquierdo Salir', 'click', 'Menu Izquierdo Salir');
            window.location = "facebook/clearsessions.php?access_token=<?PHP echo $_SESSION['access_token'] ?>&redirect=1";
          <?PHP
        } else if($c==11){
          ?>
            ga('send', 'event', 'Menu Izquierdo Pago', 'click', 'Menu Izquierdo Pago');
            window.location = "https://www.mercadopago.com/mlm/debits/new?preapproval_plan_id=4a535e7b68be493ba1732ef2fab2e0d2";
          <?PHP
        } else {
          ?>
            toastr["info"](txt143);
          <?PHP
        }
      ?>
    });
<?PHP
    $c++;
}
?>

<!--Angular Librerías-->
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular-sanitize.js"></script>
<script type="text/javascript" src="angular/lib/system.js"></script>
<script type="text/javascript" src="angular/lib/nots.js"></script>
<script type="text/javascript" src="angular/lib/factory.js"></script>

<link type="text/css" href="css/style-loading.css" rel="stylesheet" media="all" />
<link type="text/css" href="css/sortable.css" rel="stylesheet" media="all" />
    
</head>
<body style="background-color: #f3f3f3;" ng-controller="systemCtrl">

        <?PHP
?>
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section"></div>
</div>
        <section id="main">
            <aside id="sidebar" class="">
                <div class="sidebar-inner c-overflow" tabindex="1" style="overflow: hidden; outline: none;">
<ul class="main-menu">
                        <li style="text-align: center;">
                          <button onclick="abrirSignUpModal();" style="background-color: #26A8FF;" class="btn waves-effect waves-light" type="submit" name="action">Agrega otra red social
                            <span class="fa fa-plus"></span>
                          </button>
                        </li>
                        <li id="tableSys1" style="padding-top: 10px;">
                            <a href="" style="cursor: pointer;"><i class="fa fa-home"></i> Inicio</a>
                        </li>
                        <li id="tableSys2">
                            <a href="" style="cursor: pointer;"><i class="fa fa-pencil"></i> Escribir una publicación nueva</a>
                        </li>
                        <li id="tableSys3">
                            <a href="" style="cursor: pointer;"><i class="fa fa-calendar"></i> Ver calendario de publicaciones</a>
                        </li>
                        <li id="tableSys4">
                            <a href="" style="cursor: pointer;"><i class="fa fa-envelope"></i> Mis mensajes</a>
                        </li>
                        <li id="tableSys12">
                            <a href="stats.php" style="cursor: pointer;" id="tableSys5"><i class="icon-stats-dots"></i> Mis estadísticas</a>
                        </li>
                        <li id="tableSys13">
                          <div style="cursor: pointer;" class="dropdown">
                            <a class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="" style="cursor: pointer; padding: 14px 20px 14px 52px; display: block; color: #4C4C4C; font-weight: 500; position: relative;"><i class="fa fa-shopping-cart" style="position: absolute; left: 16px; font-size: 20px; top: 0; width: 25px; text-align: center; padding: 13px 0;"></i> Pagar</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li id="tableSys11"><a style="cursor: pointer;" href="">Pagar por MercadoPago</a></li>
                                <li style="text-align: center; cursor: default;">ó</li>
                                <li style="text-align: center;">Pagar por PayPal
                                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                        <input type="hidden" name="cmd" value="_s-xclick">
                                        <input type="hidden" name="hosted_button_id" value="89NRE5J3DZDCL">
                                        <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                                        <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                                    </form>
                                </li>  
                            </ul>
                          </div>
                        </li>
                        <li>
                            <a href="" style="cursor: pointer;" id="tableSys7"><i class="fa fa-cogs"></i> Herramientas</a>
                        </li>
                        <li id="tableSys8">
                            <a href="" style="cursor: pointer;"><i class="fa fa-question-circle"></i> Necesito ayuda</a>
                        </li>
                        <li>
                            <a href="" style="cursor: pointer;" id="tableSys9"><i class="icon-subirpremium"></i> Conviértete a GOLD</a>
                        </li>
                        <li id="tableSys10">
                            <a href="" style="cursor: pointer;"><i class="icon-salir"></i> Salir de bamboostr</a>
                        </li>
                    </ul>
                </div>
            </aside>
        </section>
        <section id="body">
          <div class="row">
              <div class="col-md-2">
              </div>
              <div class="col-md-8">
                <div class="card">
                    <div class="card-content">
                      <img src="<?PHP echo ""; ?>" style="width: 100px; height: 100px; display: inline-block;">
                      <p style="padding-left: 50px; font-size: 20px; display: inline-block;">Bienvenido <?PHP echo ""; ?></p>
                      <p style="padding-right: 50px; font-size: 20px; display: inline-block;" class="pull-right hidden-xs">
                        <button onclick="abrirSignUpModal();" style="background-color: #26A8FF; margin-left: 50px;" class="btn waves-effect waves-light" type="submit" name="action">Agrega otra red social
                            <span class="fa fa-plus"></span>
                        </button>    
                      </p>
                    </div>
                </div>
              </div>
            <div class="col-md-2">
            </div>
          </div>
          
          <div id="bloques" class="row" style="margin:0;">
              
          </div>
          
        </section>

@stop
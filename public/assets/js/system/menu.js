//JQUERY
$(document).ready(function(){
    $('#tableSys1').click(function(){
            ga('send', 'event', 'Menu Izquierdo System', 'click', 'Menu Izquierdo System');
            window.location = "system.php";
    });
    $('#tableSys2').click(function(){
            ga('send', 'event', 'Menu Izquierdo Escribir', 'click', 'Menu Izquierdo Escribir');
            window.location = "escribir.php";
    }); 
    $('#tableSys3').click(function(){
            ga('send', 'event', 'Menu Izquierdo Calendario', 'click', 'Menu Izquierdo Calendario');
            window.location = "calendario.php";
    }); 
    $('#tableSys4').click(function(){
            ga('send', 'event', 'Menu Izquierdo Responder', 'click', 'Menu Izquierdo Responder');
            window.location = "responder.php";
    }); 
}); 
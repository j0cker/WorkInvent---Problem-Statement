# JQuery Ready
$(document).ready -> 
    $("#loginButton").unbind().click ->
        console.log "[Login][Button]"
        $("#modal").modal "show"
        $(".modal-title").html Lang.get "messages.login"
        $(".modal-body").html ""
        null
    null

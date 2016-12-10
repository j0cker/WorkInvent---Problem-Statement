# JQuery Ready

$.ajaxSetup ->
  headers: {
  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr 'content'
  }
  null

#$(document).ready -> 

    #loading()
    
    #$("#loginButton").unbind().click ->
    #    console.log "[Login][Button]"
    #    $("#modal").modal "show"
    #    $(".modal-title").html Lang.get "messages.login"
    #    null
    #null

#loading = ->

    #$('body').addClass 'load'

    #setTimeout ->
        #$('body').addClass 'loaded'
        #null
    #, 1000

    #null

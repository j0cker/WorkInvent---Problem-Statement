app.controller 'ctrl', ($scope, evt, $window) ->
    console.log "[SystemCtrl]"

    $('.tooltipped').tooltip({delay: 50});

    evt.loading();

    if $window.window.Laravel.timezone? 
        $("#modal").modal "show"
        $(".modal-title").html Lang.get('messages.welcome') + "" + $window.window.Laravel.name
        evt.timezone($("#configurationForm #timezone").val()).then (response) ->
            #success
            if(response.data.success==Lang.get('messages.successFalse'))
                toastr.info(Lang.get("messages.errorsBDRepeat"), '');	
                $("#modal").modal "hide"
            else
                console.log response.data

            $scope.timezone = response.data;  
            return
        , (response) ->
            #ERROR
            toastr.error(Lang.get "messages.errorsBD", "ERROR");
            $("#modal").modal "hide"
            return
    null

app.controller 'notsCtrl', ($rootScope, $scope, evt, $filter) ->
    
    null
return
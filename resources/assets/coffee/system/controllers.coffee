app.controller 'home', ($scope, evt, $window) ->
    console.log "[HomeCtrl]"

    $('.tooltipped').tooltip({delay: 50});

    evt.loading();

    if !$window.window.Laravel.timezone 
        $("#modal").modal "show"
        $(".modal-title").html Lang.get('messages.welcome') + "" + $window.window.Laravel.name
        evt.timezone($("#configurationForm #timezoneUrl").val()).then (response) ->
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
        evt.language($("#configurationForm #languageUrl").val()).then (response) ->
            #success
            if(response.data.success==Lang.get('messages.successFalse'))
                toastr.info(Lang.get("messages.errorsBDRepeat"), '');	
                $("#modal").modal "hide"
            else
                console.log response.data

            $scope.language = response.data;  
            return
        , (response) ->
            #ERROR
            toastr.error(Lang.get "messages.errorsBD", "ERROR");
            $("#modal").modal "hide"
            return

         # add the rule here

        $.validator.addMethod "valueNotEquals", (value, element, arg) ->
            return arg != value;
        , "Value must not equal arg."

        $("#configurationForm").validate({
            'rules': {
                # compound rule
                'timezone': {
                    'valueNotEquals': Lang.get 'messages.selectTimezone'
                },
                'language': {
                    'valueNotEquals': Lang.get 'messages.selectLanguage'
                }
            }, 
            'messages': {
                'timezone': {
                    'valueNotEquals': Lang.get "messages.timezoneForm"
                },
                'language': {
                    'valueNotEquals': Lang.get "messages.languageForm"
                }
            },
            'errorPlacement': (error, element) -> 
                console.log "Validate: Error"
                element.css "width","100%"
                div = $(element).closest '.input-group'
                $(div).append error
            ,
            'submitHandler': (form) ->
                $("#configurationForm #configurationButtonSubmit").css "display","none"
                #entra cuando todo está bien sin errores, pero anteriormente debes de hacer un $("#registerButtonSubmit").submit();
                console.log "Validate: Submit Handler"
                #$("#registerButtonSubmit").submit(); no puede ir ésto aquí se hace un loop
                #form.submit();
                evt.configuration($("#configurationForm #url").val(), $("#configurationForm #timezone").val(), $("#configurationForm #language").val()).then (response) ->
                    #success
                    if(response.data.success==Lang.get('messages.successFalse'))
                        toastr.error(Lang.get("messages.errorsBD"), '');
                    else
                        toastr.success(Lang.get("messages.BDsuccess"), '');
                    $("#modal").modal "hide"
                    return
                , (response) ->
                    #ERROR
                    toastr.error(Lang.get "messages.errorsBD", "ERROR");
                    $("#modal").modal "hide"
                    return
            , 
            'success': (label) ->
                #entra cuando un input ya está bien para el validador
                label.addClass("valid").text("Ok!");
        });

        $("#configurationForm #configurationButtonSubmit").unbind().click ->
            console.log "[Modal][Button][Configuration]";
            $("#configurationForm #configurationButtonSubmit").submit();

            return

    return
app.controller 'notsCtrl', ($rootScope, $scope, evt, $filter) ->
    
    return

app.controller 'profile', ($scope, evt, $window) ->
    console.log "[ProfileCtrl]"

    $('.tooltipped').tooltip({delay: 50});

    evt.loading();

    evt.timezone($("#timezoneUrl").val()).then (response) ->
        #success
        if(response.data.success==Lang.get('messages.successFalse'))
            toastr.info(Lang.get("messages.errorsBDRepeat"), '');	
        else
            console.log response.data

        $scope.timezone = response.data;  
        return
    , (response) ->
        #ERROR
        toastr.error(Lang.get "messages.errorsBD", "ERROR");
        return


    evt.language($("#languageUrl").val()).then (response) ->
        #success
        if(response.data.success==Lang.get('messages.successFalse'))
            toastr.info(Lang.get("messages.errorsBDRepeat"), '');	
        else
            console.log response.data

        $scope.language = response.data;  
        return
    , (response) ->
        #ERROR
        toastr.error(Lang.get "messages.errorsBD", "ERROR");
        return

    return
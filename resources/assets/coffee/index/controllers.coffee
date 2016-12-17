app.controller 'ctrl', ($scope, evt) ->
    console.log "[IndexCtrl]"

    evt.loading();

    $scope.loginButton = false
    $scope.registerButton = false

    #register form mask with 50 chars
    $('#registerForm #name').mask 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'
    $('#registerForm #email').mask('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', {
        translation: {
            "A": { pattern: /[\w@\-.+]/ }
        }
    });

    $("#registerForm").validate({
        'rules': {
            # simple rule, converted to {required:true}
            'name': "required",
            # compound rule
            'email': {
                'required': true,
                'email': true
            },
            'password': {
                'required': true,
                'minlength': 6
            }
        }, 
        'messages': {
            'name': Lang.get "messages.nameForm",
            'password': {
                'required': Lang.get "passwordFormRequired",
                'minlength': Lang.get "passwordFormMinLength"
            },
            'password-confirm': {
                'required': Lang.get "passwordFormRequired",
                'minlength': Lang.get "passwordFormMinLength"
            },
            'email': Lang.get "messages.mailForm"
        },
        'errorPlacement': (error, element) -> 
            console.log "Validate: Error"
            element.css "width","100%"
            div = $(element).closest '.input-group'
            $(div).after error
        ,
        'submitHandler': (form) ->
            #entra cuando todo está bien sin errores, pero anteriormente debes de hacer un $("#registerButtonSubmit").submit();
            console.log "Validate: Submit Handler"
            #$("#registerButtonSubmit").submit(); no puede ir ésto aquí se hace un loop
            form.submit();
        , 
        'success': (label) ->
            #entra cuando un input ya está bien para el validador
            label.addClass("valid").text("Ok!");
    });
    
    $("#registerButtonSubmit").unbind().click ->
        console.log "[Register][Button][Submit]"
        #$('#registerForm').valid() #it is doing automatically
        $("#registerButtonSubmit").submit(); #is going to validate first before enter to submitHandler
        null

    $("#registerButton").unbind().click ->
        console.log "[Register][Button]"
        $("#modal").modal "show"
        $scope.loginButton = false
        $scope.registerButton = true
        $scope.$apply(); #this triggers a $digest
        $(".modal-title").html Lang.get "messages.register"
        null

    $('#loginForm #email').mask('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', {
        translation: {
            "A": { pattern: /[\w@\-.+]/ }
        }
    });

    $("#loginForm").validate({
        'rules': {
            # compound rule
            'email': {
                'required': true,
                'email': true
            },
            'password': {
                'required': true,
                'minlength': 6
            }
        }, 
        'messages': {
            'password': {
                'required': Lang.get "passwordFormRequired",
                'minlength': Lang.get "passwordFormMinLength"
            },
            'email': Lang.get "messages.mailForm"
        },
        'errorPlacement': (error, element) -> 
            console.log "Validate: Error"
            element.css "width","100%"
            div = $(element).closest '.input-group'
            $(div).after error
        ,
        'submitHandler': (form) ->
            #entra cuando todo está bien sin errores, pero anteriormente debes de hacer un $("#registerButtonSubmit").submit();
            console.log "Validate: Submit Handler"
            #$("#registerButtonSubmit").submit(); no puede ir ésto aquí se hace un loop
            form.submit();
        , 
        'success': (label) ->
            #entra cuando un input ya está bien para el validador
            label.addClass("valid").text("Ok!");
    });

    $("#loginButtonSubmit").unbind().click ->
        console.log "[Login][Button][Submit]"
        #$('#registerForm').valid() #it is doing automatically
        $("#loginButtonSubmit").submit(); #is going to validate first before enter to submitHandler
        null

    $("#loginButton").unbind().click ->
        console.log "[Login][Button]"
        $("#modal").modal "show"
        $scope.loginButton = true
        $scope.registerButton = false
        $scope.$apply(); #this triggers a $digest
        $(".modal-title").html Lang.get "messages.login"
        null
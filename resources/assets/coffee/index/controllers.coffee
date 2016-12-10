app.controller 'ctrl', ($scope, evt) ->
    console.log "[IndexCtrl]"

    evt.loading();

    $scope.loginButton = false
    $scope.registerButton = false

    #register form mask with 50 chars
    $('#nameForm').mask 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'
    $('#mailForm').mask('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', {
        translation: {
            "A": { pattern: /[\w@\-.+]/, recursive: true }
        }
    });

    $("#registerForm").validate({
        rules: {
            # simple rule, converted to {required:true}
            nameForm: "required",
            # compound rule
            mailForm: {
                required: true,
                email: true
            },
            passwordForm: {
                required: true,
                minlength: 5
            }
        }, 
        messages: {
            nameForm: Lang.get "messages.nameForm",
            passwordForm: {
                required: Lang.get "passwordFormRequired",
                minlength: Lang.get "passwordFormMinLength"
            },
            passwordConfForm: {
                required: Lang.get "passwordFormRequired",
                minlength: Lang.get "passwordFormMinLength"
            },
            mailForm: Lang.get "messages.mailForm"
        },
        errorPlacement: (error, element) -> 
            console.log "Validate: Error"
            element.css "width","100%"
            div = $(element).closest '.input-group'
            $(div).after error
        ,
        submitHandler: (form) ->
            #entra cuando todo está bien sin errores, pero anteriormente debes de hacer un $("#registerButtonSubmit").submit();
            console.log "Validate: Submit Handler"
            #$("#registerButtonSubmit").submit(); no puede ir ésto aquí se hace un loop
            form.submit();
        , 
        success: (label) ->
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

    $("#loginButton").unbind().click ->
        console.log "[Login][Button]"
        $("#modal").modal "show"
        $scope.loginButton = true
        $scope.registerButton = false
        $scope.$apply(); #this triggers a $digest
        $(".modal-title").html Lang.get "messages.login"
        null
(function() {
  app.controller('ctrl', function($scope, evt) {
    console.log("[IndexCtrl]");
    evt.loading();
    $scope.loginButton = false;
    $scope.registerButton = false;
    $('#nameForm').mask('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA');
    $('#mailForm').mask('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', {
      translation: {
        "A": {
          pattern: /[\w@\-.+]/,
          recursive: true
        }
      }
    });
    $("#registerForm").validate({
      rules: {
        nameForm: "required",
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
        nameForm: Lang.get("messages.nameForm", {
          passwordForm: {
            required: Lang.get("passwordFormRequired", {
              minlength: Lang.get("passwordFormMinLength")
            })
          },
          passwordConfForm: {
            required: Lang.get("passwordFormRequired", {
              minlength: Lang.get("passwordFormMinLength")
            })
          },
          mailForm: Lang.get("messages.mailForm")
        })
      },
      errorPlacement: function(error, element) {
        var div;
        console.log("Validate: Error");
        element.css("width", "100%");
        div = $(element).closest('.input-group');
        return $(div).after(error);
      },
      submitHandler: function(form) {
        console.log("Validate: Submit Handler");
        return form.submit();
      },
      success: function(label) {
        return label.addClass("valid").text("Ok!");
      }
    });
    $("#registerButtonSubmit").unbind().click(function() {
      console.log("[Register][Button][Submit]");
      $("#registerButtonSubmit").submit();
      return null;
    });
    $("#registerButton").unbind().click(function() {
      console.log("[Register][Button]");
      $("#modal").modal("show");
      $scope.loginButton = false;
      $scope.registerButton = true;
      $scope.$apply();
      $(".modal-title").html(Lang.get("messages.register"));
      return null;
    });
    return $("#loginButton").unbind().click(function() {
      console.log("[Login][Button]");
      $("#modal").modal("show");
      $scope.loginButton = true;
      $scope.registerButton = false;
      $scope.$apply();
      $(".modal-title").html(Lang.get("messages.login"));
      return null;
    });
  });

}).call(this);

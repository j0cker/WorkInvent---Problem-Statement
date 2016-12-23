(function() {
  app.controller('ctrl', function($scope, evt) {
    console.log("[IndexCtrl]");
    evt.loading();
    $scope.loginButton = false;
    $scope.registerButton = false;
    $scope.sendLinkPassButton = false;
    $('#registerForm #name').mask('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA');
    $('#registerForm #email').mask('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', {
      translation: {
        "A": {
          pattern: /[\w@\-.+]/
        }
      }
    });
    $("#registerForm").validate({
      'rules': {
        'name': "required",
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
        'name': Lang.get("messages.nameForm", {
          'password': {
            'required': Lang.get("passwordFormRequired", {
              'minlength': Lang.get("passwordFormMinLength")
            })
          },
          'password-confirm': {
            'required': Lang.get("passwordFormRequired", {
              'minlength': Lang.get("passwordFormMinLength")
            })
          },
          'email': Lang.get("messages.mailForm")
        })
      },
      'errorPlacement': function(error, element) {
        var div;
        console.log("Validate: Error");
        element.css("width", "100%");
        div = $(element).closest('.input-group');
        return $(div).after(error);
      },
      'submitHandler': function(form) {
        console.log("Validate: Submit Handler");
        return form.submit();
      },
      'success': function(label) {
        return label.addClass("valid").text("Ok!");
      }
    });
    $("#registerButtonSubmit").unbind().click(function() {
      console.log("[Register][Button][Submit]");
      $("#registerButtonSubmit").submit();
    });
    $("#registerButton").unbind().click(function() {
      console.log("[Register][Button]");
      $("#modal").modal("show");
      $scope.loginButton = false;
      $scope.registerButton = true;
      $scope.sendLinkPassButton = false;
      $scope.$apply();
      $(".modal-title").html(Lang.get("messages.register"));
    });
    $('#loginForm #email').mask('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', {
      translation: {
        "A": {
          pattern: /[\w@\-.+]/
        }
      }
    });
    $("#loginForm").validate({
      'rules': {
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
          'required': Lang.get("passwordFormRequired", {
            'minlength': Lang.get("passwordFormMinLength")
          })
        },
        'email': Lang.get("messages.mailForm")
      },
      'errorPlacement': function(error, element) {
        var div;
        console.log("Validate: Error");
        element.css("width", "100%");
        div = $(element).closest('.input-group');
        return $(div).after(error);
      },
      'submitHandler': function(form) {
        console.log("Validate: Submit Handler");
        return form.submit();
      },
      'success': function(label) {
        return label.addClass("valid").text("Ok!");
      }
    });
    $("#loginButtonSubmit").unbind().click(function() {
      console.log("[Login][Button][Submit]");
      $("#loginButtonSubmit").submit();
    });
    $("#loginButton").unbind().click(function() {
      console.log("[Login][Button]");
      $("#modal").modal("show");
      $scope.loginButton = true;
      $scope.registerButton = false;
      $scope.sendLinkPassButton = false;
      $scope.$apply();
      $(".modal-title").html(Lang.get("messages.login"));
    });
    $('#sendLinkPassForm #email').mask('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', {
      translation: {
        "A": {
          pattern: /[\w@\-.+]/
        }
      }
    });
    $("#sendLinkPassForm").validate({
      'rules': {
        'email': {
          'required': true,
          'email': true
        }
      },
      'messages': {
        'email': Lang.get("messages.mailForm")
      },
      'errorPlacement': function(error, element) {
        var div;
        console.log("Validate: Error");
        element.css("width", "100%");
        div = $(element).closest('.input-group');
        return $(div).after(error);
      },
      'submitHandler': function(form) {
        console.log("Validate: Submit Handler");
        return form.submit();
      },
      'success': function(label) {
        return label.addClass("valid").text("Ok!");
      }
    });
    $("#sendLinkPassButtonSubmit").unbind().click(function() {
      console.log("[sendLinkPass][Button][Submit]");
      $("#sendLinkPassButtonSubmit").submit();
    });
    $("#loginForm #sendLinkPassButton").unbind().click(function() {
      console.log("[sendLinkPass][Login][Button]");
      $("#modal").modal("show");
      $scope.loginButton = false;
      $scope.registerButton = false;
      $scope.sendLinkPassButton = true;
      $scope.$apply();
      $(".modal-title").html(Lang.get("messages.ResetPassword"));
    });
    $("#registerForm #sendLinkPassButton").unbind().click(function() {
      console.log("[sendLinkPass][Register][Button]");
      $("#modal").modal("show");
      $scope.loginButton = false;
      $scope.registerButton = false;
      $scope.sendLinkPassButton = true;
      $scope.$apply();
      $(".modal-title").html(Lang.get("messages.ResetPassword"));
    });
    $('#resetForm #email').mask('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', {
      translation: {
        "A": {
          pattern: /[\w@\-.+]/
        }
      }
    });
    $("#resetForm").validate({
      'rules': {
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
          'required': Lang.get("passwordFormRequired", {
            'minlength': Lang.get("passwordFormMinLength")
          })
        },
        'password-confirm': {
          'required': Lang.get("passwordFormRequired", {
            'minlength': Lang.get("passwordFormMinLength")
          })
        },
        'email': Lang.get("messages.mailForm")
      },
      'errorPlacement': function(error, element) {
        var div;
        console.log("Validate: Error");
        element.css("width", "100%");
        div = $(element).closest('.input-group');
        return $(div).after(error);
      },
      'submitHandler': function(form) {
        console.log("Validate: Submit Handler");
        return form.submit();
      },
      'success': function(label) {
        return label.addClass("valid").text("Ok!");
      }
    });
    $("#resetButtonSubmit").unbind().click(function() {
      console.log("[Reset][Button][Submit]");
      $("#resetButtonSubmit").submit();
    });
    return null;
  });

  app.controller('notsCtrl', function($rootScope, $scope, evt, $filter) {
    return null;
  });

  return;

}).call(this);

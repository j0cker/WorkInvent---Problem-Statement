(function() {
  app.controller('home', function($scope, evt, $window) {
    console.log("[HomeCtrl]");
    $('.tooltipped').tooltip({
      delay: 50
    });
    evt.loading();
    if (!$window.window.Laravel.timezone) {
      $("#modal").modal("show");
      $(".modal-title").html(Lang.get('messages.welcome') + "" + $window.window.Laravel.name);
      evt.timezone($("#configurationForm #timezoneUrl").val()).then(function(response) {
        if (response.data.success === Lang.get('messages.successFalse')) {
          toastr.info(Lang.get("messages.errorsBDRepeat"), '');
          $("#modal").modal("hide");
        } else {
          console.log(response.data);
        }
        $scope.timezone = response.data;
      }, function(response) {
        toastr.error(Lang.get("messages.errorsBD", "ERROR"));
        $("#modal").modal("hide");
      });
      evt.language($("#configurationForm #languageUrl").val()).then(function(response) {
        if (response.data.success === Lang.get('messages.successFalse')) {
          toastr.info(Lang.get("messages.errorsBDRepeat"), '');
          $("#modal").modal("hide");
        } else {
          console.log(response.data);
        }
        $scope.language = response.data;
      }, function(response) {
        toastr.error(Lang.get("messages.errorsBD"), "ERROR");
        $("#modal").modal("hide");
      });
      $.validator.addMethod("valueNotEquals", function(value, element, arg) {
        return arg !== value;
      }, "Value must not equal arg.");
      $("#configurationForm").validate({
        'rules': {
          'timezone': {
            'valueNotEquals': Lang.get('messages.selectTimezone')
          },
          'language': {
            'valueNotEquals': Lang.get('messages.selectLanguage')
          }
        },
        'messages': {
          'timezone': {
            'valueNotEquals': Lang.get("messages.timezoneForm")
          },
          'language': {
            'valueNotEquals': Lang.get("messages.languageForm")
          }
        },
        'errorPlacement': function(error, element) {
          var div;
          console.log("Validate: Error");
          element.css("width", "100%");
          div = $(element).closest('.input-group');
          return $(div).append(error);
        },
        'submitHandler': function(form) {
          $("#configurationForm #configurationButtonSubmit").css("display", "none");
          console.log("Validate: Submit Handler");
          return evt.configuration($("#configurationForm #url").val(), $("#configurationForm #timezone").val(), $("#configurationForm #language").val()).then(function(response) {
            if (response.data.success === Lang.get('messages.successFalse')) {
              toastr.error(Lang.get("messages.errorsBD"), '');
            } else {
              toastr.success(Lang.get("messages.BDsuccess"), '');
            }
            $("#modal").modal("hide");
            window.location = "/";
          }, function(response) {
            toastr.error(Lang.get("messages.errorsBD"), "ERROR");
            $("#modal").modal("hide");
          });
        },
        'success': function(label) {
          return label.addClass("valid").text("Ok!");
        }
      });
      $("#configurationForm #configurationButtonSubmit").unbind().click(function() {
        console.log("[Modal][Button][Configuration]");
        $("#configurationForm #configurationButtonSubmit").submit();
      });
    }
  });

  app.controller('notsCtrl', function($rootScope, $scope, evt, $filter) {});

  app.controller('profile', function($scope, evt, $window) {
    console.log("[ProfileCtrl]");
    $('.tooltipped').tooltip({
      delay: 50
    });
    evt.loading();
    evt.timezone($("#timezoneUrl").val()).then(function(response) {
      if (response.data.success === Lang.get('messages.successFalse')) {
        toastr.info(Lang.get("messages.errorsBDRepeat"), '');
      } else {
        console.log(response.data);
      }
      $scope.timezone = response.data;
    }, function(response) {
      toastr.error(Lang.get("messages.errorsBD", "ERROR"));
    });
    evt.language($("#languageUrl").val()).then(function(response) {
      if (response.data.success === Lang.get('messages.successFalse')) {
        toastr.info(Lang.get("messages.errorsBDRepeat"), '');
      } else {
        console.log(response.data);
      }
      $scope.language = response.data;
    }, function(response) {
      toastr.error(Lang.get("messages.errorsBD"), "ERROR");
    });
    $('#profileForm #name').mask('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA');
    $('#profileForm #email').mask('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', {
      translation: {
        "A": {
          pattern: /[\w@\-.+]/
        }
      }
    });
    $scope.cambiarImagen = function(url, url2) {
      var fd, oFile, rFilter;
      $('body').attr("class", "loading");
      rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;
      console.log("[cambiarImagen][fileImage][Tamaño]: " + document.getElementById("fileImage").files.length);
      if (document.getElementById("fileImage").files.length === 0) {
        return;
      }
      oFile = document.getElementById("fileImage").files[0];
      if (!rFilter.test(oFile.type)) {
        $('body').addClass('loaded');
        toastr["error"](Lang.get('messages.errorFormat'), "ERROR");
        return;
      }
      fd = new FormData();
      fd.append("fileImage", oFile);
      console.log("[cambiarImagen][fd]");
      console.log(fd);
      evt.subirImagen(url, fd).then(function(response) {
        response = JSON.parse(response);
        if (response.success === Lang.get('messages.successFalse')) {
          toastr.info(Lang.get("messages.errorsBD"), 'ERROR');
        } else {
          evt.actualizarImageProfile(url2, response.description).then(function(response) {
            if (response.data.success === Lang.get('messages.successFalse')) {
              toastr.info(Lang.get("messages.errorsBD"), 'ERROR');
            } else {
              toastr.success(Lang.get("messages.BDsuccess"), '');
              window.location = "/profile";
            }
          }, function(response) {
            toastr.error(Lang.get("messages.errorsBD"), "ERROR");
          });
          return;
        }
      }, function(response) {
        toastr.error(Lang.get("messages.errorsBD"), "ERROR");
      });
    };
    $.validator.addMethod("valueNotEquals", function(value, element, arg) {
      return arg !== value;
    }, "Value must not equal arg.");
    $("#profileForm").validate({
      'rules': {
        'name': "required",
        'email': {
          'required': true,
          'email': true
        },
        'timezoneProfile': {
          'valueNotEquals': Lang.get('messages.selectTimezone')
        },
        'languageProfile': {
          'valueNotEquals': Lang.get('messages.selectLanguage')
        }
      },
      'messages': {
        'name': Lang.get("messages.nameForm"),
        'email': Lang.get("messages.mailForm"),
        'timezoneProfile': {
          'valueNotEquals': Lang.get("messages.timezoneForm")
        },
        'languageProfile': {
          'valueNotEquals': Lang.get("messages.languageForm")
        }
      },
      'errorPlacement': function(error, element) {
        var div;
        console.log("Validate: Error");
        element.css("width", "100%");
        div = $(element).closest('.input-group');
        return $(div).append(error);
      },
      'submitHandler': function(form) {
        $("#profileForm #profileButtonSubmit").css("display", "none");
        console.log("Validate: Submit Handler");
        return evt.profile($("#profileForm #profileUrl").val(), $("#profileForm #name").val(), $("#profileForm #email").val(), $("#profileForm #timezoneProfile").val(), $("#profileForm #languageProfile").val(), $("#profileForm #password").val()).then(function(response) {
          if (response.data.success === Lang.get('messages.successFalse')) {
            toastr.error(Lang.get("messages.errorsBD"), '');
          } else {
            toastr.success(Lang.get("messages.BDsuccess"), '');
            window.location = "/profile";
          }
          $("#profileForm #profileButtonSubmit").css("display", "");
        }, function(response) {
          toastr.error(Lang.get("messages.errorsBD", "ERROR"));
          $("#profileForm #profileButtonSubmit").css("display", "");
        });
      },
      'success': function(label) {
        return label.addClass("valid").text("Ok!");
      }
    });
    $("#profileForm #profileButtonSubmit").unbind().click(function() {
      console.log("[Modal][Button][Profile]");
      $("#profileForm #profileButtonSubmit").submit();
    });
  });

}).call(this);

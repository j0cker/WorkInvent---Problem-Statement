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
        toastr.error(Lang.get("messages.errorsBD", "ERROR"));
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
          }, function(response) {
            toastr.error(Lang.get("messages.errorsBD", "ERROR"));
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
      toastr.error(Lang.get("messages.errorsBD", "ERROR"));
    });
  });

}).call(this);

(function() {
  app.controller('ctrl', function($scope, evt, $window) {
    console.log("[SystemCtrl]");
    $('.tooltipped').tooltip({
      delay: 50
    });
    evt.loading();
    if ($window.window.Laravel.timezone != null) {
      $("#modal").modal("show");
      $(".modal-title").html(Lang.get('messages.welcome') + "" + $window.window.Laravel.name);
      evt.timezone($("#configurationForm #timezone").val()).then(function(response) {
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
    }
    return null;
  });

  app.controller('notsCtrl', function($rootScope, $scope, evt, $filter) {
    return null;
  });

  return;

}).call(this);

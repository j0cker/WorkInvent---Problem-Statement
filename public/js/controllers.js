(function() {
  app.controller('ctrl', function($scope, evt) {
    console.log("[SystemCtrl]");
    $('.tooltipped').tooltip({
      delay: 50
    });
    evt.loading();
    return null;
  });

  app.controller('notsCtrl', function($rootScope, $scope, evt, $filter) {
    return null;
  });

  return;

}).call(this);

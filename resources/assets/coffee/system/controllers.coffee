app.controller 'ctrl', ($scope, evt) ->
    console.log "[SystemCtrl]"

    evt.loading();
    
    null

app.controller 'notsCtrl', ($rootScope, $scope, evt, $filter) ->
    
    null
return
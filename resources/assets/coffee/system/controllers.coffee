app.controller 'ctrl', ($scope, evt) ->
    console.log "[SystemCtrl]"

    $('.tooltipped').tooltip({delay: 50});


    evt.loading();
    
    null

app.controller 'notsCtrl', ($rootScope, $scope, evt, $filter) ->
    
    null
return
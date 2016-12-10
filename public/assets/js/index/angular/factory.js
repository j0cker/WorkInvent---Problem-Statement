(function() {
  app.factory('evt', function($http) {
    return {
      loading: function() {
        $('body').addClass('load');
        return setTimeout(function() {
          return $('body').addClass('loaded');
        }, 1000);
      }
    };
  });

}).call(this);

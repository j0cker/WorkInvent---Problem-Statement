(function() {
  app.factory('evt', function($http) {
    return {
      loading: function() {
        $('body').removeClass('load');
        $('body').removeClass('loaded');
        $('body').addClass('load');
        return setTimeout(function() {
          return $('body').addClass('loaded');
        }, 1000);
      },
      timezone: function(url) {
        return $http.get(url, {
          cache: false
        });
      }
    };
  });

}).call(this);

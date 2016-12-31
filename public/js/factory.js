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
      },
      language: function(url) {
        return $http.get(url, {
          cache: false
        });
      },
      configuration: function(url, timezone, language) {
        return $http.post(url, {
          params: {
            timezone: timezone,
            language: language
          }
        }, {
          cache: false
        });
      },
      profile: function(url, name, email, timezone, language) {
        return $http.post(url, {
          params: {
            name: name,
            email: email,
            timezone: timezone,
            language: language
          }
        }, {
          cache: false
        });
      }
    };
  });

}).call(this);

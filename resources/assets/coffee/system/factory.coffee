app.factory 'evt',($http) ->
    return {
        loading: ->
            $('body').removeClass 'load'
            $('body').removeClass 'loaded'
            $('body').addClass 'load'
            setTimeout ->
                $('body').addClass 'loaded'
            , 1000
        , timezone: (url) ->
            return  $http.get(url, { cache: false })
    }
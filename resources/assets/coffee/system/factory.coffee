app.factory 'evt',($http) ->
    return {
        loading: ->
            $('body').addClass 'load'
            setTimeout ->
                $('body').addClass 'loaded'
            , 1000
    }
app.factory 'evt',($http) ->
    return {
        loading: ->
            $('body').removeClass 'load'
            $('body').removeClass 'loaded'
            $('body').addClass 'load'
            setTimeout ->
                $('body').addClass 'loaded'
            , 1000
    }
var gulp = require('gulp');
var shell = require('gulp-shell');

var elixir = require('laravel-elixir');


var Task = elixir.Task;
elixir.extend('langjs', function(path) {
    new Task('langjs', function() {
        gulp.src('').pipe(shell('php artisan lang:js ' + (path || 'public/assets/js/messages.js')));
    });
});

elixir(function(mix) {
    mix.langjs();
});


elixir.config.sourcemaps = false;


//hace Mix por el asterisco y genera un archivo
elixir(function(mix) {
    mix.less('*.less')
    .version('public/css/style.css');
});

elixir(function(mix) {
    mix.coffee('*.coffee')
    .version('public/js/coffe.js');
});

elixir(function(mix) {
    mix.coffee('index.coffee')
    .version('public/js/index.js');
});
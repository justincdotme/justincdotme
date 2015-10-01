var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.scripts([
        '/bower/jquery/dist/jquery.js',
        '/bower/bootstrap/dist/js/bootstrap.js',
        '/bower/angular/angular.js',
        '/bower/jquery-easing-original/jquery.easing.js',
        '/justin/main.js'
    ], 'public/js/scripts.js');
    mix.sass([
        'main.scss'
    ], 'public/css/main.css');
    mix.version([
        'public/css/main.css',
        'public/js/scripts.js'
    ]);
});

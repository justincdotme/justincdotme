var elixir = require('laravel-elixir');


elixir(function(mix) {
    mix.scripts([
        '/bower/jquery/dist/jquery.js',
        '/bower/bootstrap/dist/js/bootstrap.js',
        '/bower/jquery-easing-original/jquery.easing.js',
        '/bower/angular/angular.min.js',
        '/bower/Flowtype.js/flowtype.js',
        '/justin/main.js'
    ],
        'public/js/scripts.js');
    mix.sass([
        'main.scss'
    ],
        'public/css/main.css');
    mix.version([
        'public/css/main.css',
        'public/js/scripts.js'
    ]);
});

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
    //mix.sass('app.scss' , 'resources/assets/css');
    mix.copy([
        'public/vendor/bower_components/materialize/dist/css/materialize.css',
        'public/vendor/bower_components/select2/dist/css/select2.css',
        'public/assets/css/style.css'
        ], 'resources/assets/css');
    mix.copy([
        'public/vendor/bower_components/materialize/dist/font'
        ], 'public/font/');
    mix.styles([
        'materialize.css',
        'select2.css',
        'style.css',
        //'app.css'
        ], 'public/css');


     mix.copy([
        'public/vendor/bower_components/jquery/dist/jquery.js',
        'public/vendor/bower_components/materialize/dist/js/materialize.js',
        'public/vendor/bower_components/select2/dist/js/select2.js',
        'public/vendor/bower_components/angular/angular.js'
        ], 'resources/assets/js');
    mix.scripts([
        'jquery.js',
        'materialize.js',
        'select2.js',
        'angular.js',
        //'style.js',
        ], 'public/js');
});

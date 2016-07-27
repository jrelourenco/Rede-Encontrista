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

jsPublicPath = 'resources/assets/js/public';
elixir.config.sourcemaps = false;

elixir(function (mix) {
    mix.sass('app.scss');

    mix.copy('node_modules/jquery/dist/jquery.js', jsPublicPath);
    mix.copy('node_modules/bootstrap-sass/assets/javascripts/bootstrap.js', jsPublicPath);
    mix.copy('node_modules/angular/angular.js', jsPublicPath);


    mix.scripts([
        'public/jquery.js',
        'public/bootstrap.js',
        'public/angular.js',
    ]);
    mix.scriptsIn('private');
});

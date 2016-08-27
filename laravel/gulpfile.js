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

var COMPILED = true;


/////////////////////
var min = COMPILED ? ".min" : "";
var vendorPath = 'bower_components/';
var vendorPathHack = "../../../";
var publicPath = 'public/';
var jsPublicPath = publicPath + "js/";
var fontPublicPath = publicPath + "fonts";

elixir.config.sourcemaps = false;

elixir(function (mix) {

    mix.sass('app.scss');

    mix.styles([
        'public/css/app.css',
        'bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch' + min + '.css'
    ], 'public/css/app.css', './');


    mix.scripts([
        vendorPathHack + vendorPath + 'jquery/dist/jquery' + min + '.js',
        vendorPathHack + 'node_modules/bootstrap-sass/assets/javascripts/bootstrap' + min + '.js',
        vendorPathHack + vendorPath + 'angular/angular' + min + '.js',
        vendorPathHack + vendorPath + 'angular-i18n/angular-locale_pt-pt.js',
        vendorPathHack + vendorPath + 'angular-bootstrap/ui-bootstrap-tpls' + min + '.js',
        vendorPathHack + vendorPath + 'moment/min/moment-with-locales' + min + '.js',
        vendorPathHack + vendorPath + 'angular-bootstrap-calendar/dist/js/angular-bootstrap-calendar' + min + '.js',
        vendorPathHack + vendorPath + 'bootstrap-switch/dist/js/bootstrap-switch' + min + '.js',
    ], jsPublicPath + "/vendor.js");

    mix.copy(vendorPath + 'bootstrap/fonts/', fontPublicPath);


    //  mix.copy('resources/assets/js/private', jsPublicPath);

});

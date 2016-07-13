<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Encontrista;


Route::get('/', function () {
    return view('home');

});


Route::get('/subscribe', function () {
    return view('subscribef');

});

Route::get('/contact', function () {
    return view('contact');

});

Route::auth();
Route::get('/login', function () {
    return view('login');

});
Route::get('/home', 'HomeController@index');
Route::get('/admin/grupos', function () {
    return view("admin.grupos", ['grupos' => \App\Grupo::all()]);

});

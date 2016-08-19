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
use App\Http\Controllers\CourseController;


Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::group(
    [
        'as' => 'meetings.',
        'prefix' => 'meetings',
        'middleware' => 'auth',
    ],
    function () {
        Route::group(
            [
                'as' => 'json.',
                'prefix' => 'json',
            ],
            function () {
                Route::get('{id}', ['as' => 'info', 'uses' => 'CourseController@meeting']);
                Route::get('', ['as' => 'list', 'uses' => 'CourseController@meetings']);

            });
        Route::get('', ['as' => 'index', 'uses' => 'CourseController@index']);

        Route::get('{id}/subscribe', ['as' => 'subscribe', 'uses' => 'CourseController@subscribe']);
        Route::get('{id}/subscribe/{encotnrista}', ['as' => 'subscribe_other', 'uses' => 'CourseController@subscribe']);

        Route::get('{id}/unsubscribe', ['as' => 'unsubscribe', 'uses' => 'CourseController@unsubscribe']);
        Route::get('{id}/unsubscribe/{encotnrista}', ['as' => 'unsubscribe_other', 'uses' => 'CourseController@unsubscribe']);
    }
);

Route::group(
    [
        'as' => 'admin.',
        'prefix' => 'admin',
        'middleware' => 'auth',
    ],
    function () {
        Route::group(
            [
                'as' => 'meetings.',
                'prefix' => 'course',
            ],
            function () {
                Route::get('', ['as' => 'index', 'uses' => 'CourseController@admin_index']);
                Route::get('info/{encontro}', ['as' => 'info', 'uses' => 'CourseController@adminCourseInfo']);
                Route::get('edit', ['as' => 'new', 'uses' => 'CourseController@adminEditCourse']);
                Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'CourseController@adminEditCourse']);

            });
        Route::group(
            [
                'as' => 'group.',
                'prefix' => 'group',
            ],
            function () {
                Route::group(
                    [
                        'as' => 'json.',
                        'prefix' => 'josn',
                    ],
                    function () {
                        Route::get('list', ['as' => 'list', 'uses' => function () {
                            return response()->json(['groups' => \App\Grupo::all()]);
                        }]);
                        Route::get('{id}', ['as' => 'info', 'uses' => function ($id) {
                            return response()->json(['group' => \App\Grupo::findOrfail($id)]);
                        }]);
                    });

                Route::get('', ['as' => 'index', 'uses' => function () {
                    return view("admin.grupos");
                }]);
            });
    }
);

Route::get('/contact', function () {
    return view('contact');

});

Route::auth();


Route::get('config/{config}', function ($config) {
    dd(Config::get($config));
});
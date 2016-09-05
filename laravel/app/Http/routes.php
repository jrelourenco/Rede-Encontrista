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

Route::get('/teste', function () {
    return view("teste");
});
Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::auth();

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
                Route::get('{id}/{encotnrista?}', ['as' => 'info', 'uses' => 'CourseController@meeting']);
                Route::get('', ['as' => 'list', 'uses' => 'CourseController@meetings']);

            });


        Route::get('', ['as' => 'index', 'uses' => 'CourseController@index']);

        Route::get('{id}/subscribe', ['as' => 'subscribe', 'uses' => 'CourseController@subscribe']);
        Route::get('{id}/subscribe/{encotnrista}', ['as' => 'subscribe_other', 'uses' => 'CourseController@subscribe']);

        Route::get('{id}/unsubscribe', ['as' => 'unsubscribe', 'uses' => 'CourseController@unsubscribe']);
        Route::get('{id}/unsubscribe/{encotnrista}', ['as' => 'unsubscribe_other', 'uses' => 'CourseController@unsubscribe']);
    }
);


// ADMIN GROUP
Route::group([
    'as' => 'admin.',
    'prefix' => 'admin',
    'middleware' => 'auth',
], function () {
    //MEETING GROUP
    Route::group(
        [
            'as' => 'meetings.',
            'prefix' => 'meetings',
        ],
        function () {
            //Route::get('', ['as' => 'index', 'uses' => 'CourseController@admin_index']);
            Route::get('info/{id}/', ['as' => 'info', 'uses' => 'CourseController@adminCourseInfo']);
            Route::get('edit', ['as' => 'new', 'uses' => 'CourseController@adminEditCourse']);
            Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'CourseController@adminEditCourse']);

        });
    Route::group([
        'as' => 'meeting.',
        'prefix' => 'meeting',
    ], function () {
        Route::get('', ['as' => 'index', 'uses' => function () {
            return view("admin.meeting.index");
        }]);
        Route::get('modal', ['as' => 'modal', 'uses' => function () {
            return view("admin.meeting.modal");
        }]);
    });
    Route::group([
        'as' => 'group.',
        'prefix' => 'group',
    ], function () {
        Route::get('', ['as' => 'index', 'uses' => function () {
            return view("admin.group.index");
        }]);
        Route::get('modal', ['as' => 'modal', 'uses' => function () {
            return view("admin.group.modal");
        }]);
    });
});

//REST Group
Route::group(
    [
        'prefix' => 'admin/json',
    ],
    function () {
        Route::resource('group', 'GroupController', ['except' => ['create'],]);
        Route::resource('meeting', 'MeetingController', ['except' => ['create'],]);
    }
);
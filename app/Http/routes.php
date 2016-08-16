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

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@home'
]);

Route::get('me', [
    'as' => 'me',
    'uses' => 'HomeController@getMe'
]);

Route::get('login', [
    'as' => 'get_login',
    'uses' => 'Auth\AuthController@getLogin'
]);

Route::post('login', [
    'as' => 'post_login',
    'uses' => 'Auth\AuthController@postLogin'
]);

Route::get('register', [
    'as' => 'get_register',
    'uses' => 'Auth\AuthController@getRegister'
]);

Route::post('register', [
    'as' => 'post_register',
    'uses' => 'Auth\AuthController@postRegister'
]);

Route::get('logout', [
    'as' => 'get_logout',
    'uses' => 'Auth\AuthController@getLogout'
]);

Route::get('code', [
    'as' => 'get_code',
    'uses' => 'PagesController@Code'
]);
route:: group(['prefix' => 'auth'], function () {

    Route::get('code', [
        'as' => 'get_code',
        'uses' => 'PagesController@Code'
    ]);

    Route::get('sea', [
        'as' => 'get_sea',
        'uses' => 'PagesController@Sea'
    ]);

    Route::get('mountain', [
        'as' => 'get_mountain',
        'uses' => 'PagesController@Mountain'
    ]);

    Route::get('spa', [
        'as' => 'get_spa',
        'uses' => 'PagesController@Spa'
    ]);

    Route::get('city', [
        'as' => 'get_city',
        'uses' => 'PagesController@City'
    ]);

    Route::get('admin', [
        'as' => 'get_admin',
        'uses' => 'PagesController@Admin'
    ]);

});

route:: group(['prefix' => 'code'], function () {


});

/*
Route::get('/', 'HomeController@index');

Route::any('books', 'HomeController@books');

Route::get('profile', 'HomeController@index');
*//*
Route::auth();

Route::get('/home', 'HomeController@index');
*/
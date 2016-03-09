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
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Route::get('/', function () {
//    return view('welcome');
//});
//home page
Route::get('/', 'HomeController@index');

//admin pages
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function()
    {
        Route::get('/', 'AdminHomeController@index');
        Route::resource('pages', 'PagesController');
        Route::resource('articles', 'ArticlesController');
        Route::resource('comments', 'CommentsController');
        Route::get('bookings', 'BookingsController@index');
    });
//web pages
Route::get('pages/{id}', 'PagesController@show');
//blog articles
Route::get('blog/{id}', 'ArticlesController@show');
Route::get('blog', 'ArticlesController@index');
//pages
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
//comments submit
Route::post('comment/store', 'CommentsController@store');

//Booking functions
Route::group(['prefix' => 'api'], function() {
    Route::post('searchavailabity', 'RoomCalendarController@searchAvailability');
    Route::post('createreservation', 'ReservationController@createReservation');
    Route::get('reservation/{id}', 'ReservationController@show');
    Route::post('payreservation', 'PaymentController@pay');

});
//Booking admin setting api
Route::group(['prefix' => 'adminapi'], function()
{
    Route::resource('room_type', 'RoomTypeController');
    Route::post('setpriceinrange', 'RoomCalendarController@setPriceInRangeForRoomType');


});
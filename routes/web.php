<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');

Route::get('trip/{id}/view', 'TripController@trip_detail');

Route::get('ticket', function(){
    return view('ticket');
});

Route::group(['middleware' => 'auth'], function(){

Route::post('book_ticket', 'BookingController@Book_view');  

Route::get('view_tickets', 'HomeController@ticket_view'); 

Route::post('pay', 'HomeController@pay');

});
Route::group(['middleware' => 'admin_auth'], function(){

Route::get('/admin_home', 'HomeController@admin_home');

Route::post('admin_logout', 'AdminAuth\LoginController@logout');
});

Route::group(['middleware' => 'admin_guest'], function() {

Route::get('admin_login', 'AdminAuth\LoginController@showLoginForm');

Route::post('admin_login', 'AdminAuth\LoginController@login');

Route::get('admin_register', 'AdminAuth\RegisterController@showRegistrationForm');

Route::post('admin_register', 'AdminAuth\RegisterController@register');

Route::get('admin/trips/index','TripController@index');
Route::get('admin/terminal/index','TerminalController@index');
Route::get('admin/category/index','CategoryController@index');
});

Route::get('/getterminal/{id}', 'TerminalController@getTerminal');

Route::get('/gettime/from/{from}/to/{to}', 'TripController@getTime');

/* 
Route::get('/register', 'Auth\RegisterController@showRegistrationForm');

Route::post('register', 'Auth\RegisterController@register');
 */
Route::get('/admin_bookings', 'BookingController@adminbook');

Route::post('/bookings', 'BookingController@book');

Route::get('trip/create', 'TripController@create_form');

Route::post('trip/create', 'TripController@create');

Route::get('trip/{id}/delete', 'TripController@delete');

Route::get('trip/all', 'TripController@view_trips');

Route::get('terminal/create', 'TerminalController@create_view');

Route::post('terminal/create', 'TerminalController@create');

Route::get('terminal/all', 'TerminalController@all');

Auth::routes();



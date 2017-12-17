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


Auth::routes();
Route::get('/', 'GuestController@index');
Route::get('/about', 'GuestController@about');
Route::get('/gallery', 'GuestController@gallery');
Route::get('/contact', 'GuestController@contact');
Route::get('/services', 'GuestController@services');
Route::get('/team', 'GuestController@team');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', 'UserController@profileView');
    Route::get('/settings', 'UserController@settingsView');
    Route::post('/user/prof-img', 'UserController@uploadImg');
    Route::post('/user/edit', 'UserController@edit');
    Route::post('/addEducation', 'UserController@addEducation');
});
Route::post('/makeAppointment', 'GuestController@makeAppointment');
Route::post('/doctormsg', 'GuestController@sendMsg');
Route::get('/member/{id}', 'GuestController@member');
Route::get('/user/{id}', 'GuestController@user');
Route::get('/search', 'GuestController@search');
Route::get('/notfound', function () {
    return view('guest.404');
});

Route::post('/contactUs', 'GuestController@contactUs');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', 'AdminController@index');
    Route::get('/admin/settings', 'AdminController@settings');
    Route::get('/admin/team', 'AdminController@team');
    Route::get('/admin/services', 'AdminController@services');
    Route::get('/admin/gallery', 'AdminController@gallery');
    Route::get('/admin/inbox', 'AdminController@inbox');
    Route::get('/admin/appointments', 'AdminController@appointments');

    Route::post('/admin/generalSettings', 'AdminController@setGeneralSettings');
    Route::post('/admin/addService', 'AdminController@addService');
    Route::post('/admin/addMember', 'AdminController@addMember');
    Route::post('/admin/addService', 'AdminController@addService');
    Route::post('/admin/uploadGallery', 'AdminController@addPhotos');
    Route::post('/admin/remove', 'AdminController@remove');
});


Route::get('/home', 'HomeController@index');

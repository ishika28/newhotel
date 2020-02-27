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

/*Route::get('/admin', function () {
    return view('welcome');
});*/


Auth::routes();


Route::prefix('/admin-sneha')->group(function(){
	Route::get('/','AdminController@bookedRoomsTable')->name('admin.welcome');	
	Route::get('/home', 'AdminController@bookedRoomsTable')->name('home');
	Route::get('/rooms', 'AdminController@rooms')->name('admin.rooms');
	Route::get('/rooms/addrooms', 'AdminController@addRooms')->name('admin.addrooms');
	Route::post('/rooms/addrooms', 'AdminController@storeRoom')->name('admin.addrooms.submit');
	Route::get('rooms/delete/{id}', 'AdminController@deleteRoom')->name('room.delete');

	Route::get('rooms/editroom/{id}','AdminController@editRoomForm')->name('room.editroom');
    Route::post('rooms/editroom/{id}','AdminController@editRoom')->name('room.editroom.submit');

    Route::get('/rooms/bookedrooms', 'AdminController@bookedRooms')->name('admin.bookedrooms');
    Route::get('/rooms/availablerooms', 'AdminController@availableRooms')->name('admin.availablerooms');

    Route::get('rooms/bookroom/{id}','AdminController@bookRoomForm')->name('room.bookroom');
    Route::post('rooms/bookroom/{id}','AdminController@bookRoom')->name('room.bookroom.submit');
    Route::post('rooms/searchroom','AdminController@searchRoomForDate')->name('room.searchroom.submit');

     Route::get('rooms/searchroom','AdminController@show')->name('room.searchroom.submit');
    Route::get('rooms/cancelbooking/{id}','AdminController@cancelBooking')->name('room.cancelbooking.submit');
});


Route::get('/','UserController@index')->name('user.home');
Route::get('/about','UserController@about')->name('user.about');
Route::get('/contact','UserController@contact')->name('user.contact');
Route::get('/rooms','UserController@rooms')->name('user.rooms');
Route::get('/restaurant','UserController@restaurant')->name('user.restaurant');
Route::get('/attractions','UserController@attractions')->name('user.attractions');
Route::get('/conference','UserController@conference')->name('user.conference');
Route::get('/wedding','UserController@wedding')->name('user.wedding');
Route::get('/roomdetail','UserController@roomdetail')->name('user.roomdetail');
Route::post('/contact/addcomment', 'UserController@storeComment')->name('user.comment.submit');
Route::post('rooms/searchroom','UserController@searchRoomForDate')->name('room.searchroom.submit.user');
Route::get('rooms/bookroom/{id}','UserController@bookRoomForm')->name('room.bookroom.user');
Route::post('rooms/bookroom/{id}','UserController@bookRoom')->name('room.bookroom.submit.user');




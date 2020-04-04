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

// Home
Route::get('/', 'HomeController@index')->name('home');
Route::get('/movie/{id}', 'HomeController@detail')->name('detail');

// User
Route::get('/manage/user','ManageUserController@index')->name('manage.user');
Route::get('/manage/user/create','ManageUserController@create')->name('manage.user.create');
Route::post('/manage/user/store','ManageUserController@store')->name('manage.user.store');
Route::get('/manage/user/{id}/edit','ManageUserController@edit')->name('manage.user.edit');
Route::post('/manage/user/{id}/update','ManageUserController@update')->name('manage.user.update');
Route::get('/manage/user/{id}/destroy','ManageUserController@destroy')->name('manage.user.destroy');


// Movie
Route::get('/manage/movie','ManageMovieController@index')->name('manage.movie');
Route::get('/manage/movie/create','ManageMovieController@create')->name('manage.movie.create');
Route::post('/manage/movie/store','ManageMovieController@store')->name('manage.movie.store');
Route::get('/manage/movie/{id}/edit','ManageMovieController@edit')->name('manage.movie.edit');
Route::post('/manage/movie/{id}/update','ManageMovieController@update')->name('manage.movie.update');
Route::get('/manage/movie/{id}/destroy','ManageMovieController@destroy')->name('manage.movie.destroy');

// Genre
Route::get('/manage/genre','ManageGenreController@index')->name('manage.genre');
Route::get('/manage/genre/create','ManageGenreController@create')->name('manage.genre.create');
Route::post('/manage/genre/store','ManageGenreController@store')->name('manage.genre.store');
Route::get('/manage/genre/{id}/edit','ManageGenreController@edit')->name('manage.genre.edit');
Route::post('/manage/genre/{id}/update','ManageGenreController@update')->name('manage.genre.update');
Route::get('/manage/genre/{id}/destroy','ManageGenreController@destroy')->name('manage.genre.destroy');

// Profile
Route::get('/update/profile','UpdateProfileController@index')->name('update.profile');
Route::post('/update/profile/add','UpdateProfileController@add')->name('add.profile');

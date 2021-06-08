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

Route::get('/', 'HomeController@welcome' );


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware('auth' , 'admin');

Route::get('/workshop', function () {
    return view('workshop');
});
Route::get('/admin2', function () {
    return view('admin2.dashboard2');
});

Route::get('/events','HomeController@index');



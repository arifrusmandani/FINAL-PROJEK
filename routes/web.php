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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PertanyaanController@home');
Route::get('/login', function () {
    return view('public.login');
});
Route::get('/contact_us', function () {
    return view('public.contact');
});

route::group(['middleware' => 'auth'], function(){
	Route::resource('pertanyaan','PertanyaanController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout');

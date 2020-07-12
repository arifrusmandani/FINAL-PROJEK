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
	Route::get('/profile', 'UserController@index');
	Route::post('/jawaban/{id_pertanyaan}', 'JawabanController@store');
	Route::post('/komentar/{id_pertanyaan}', 'KomenpertanyaanController@store');
	Route::post('/komentar-jawaban/{id_jawaban}', 'KomenjawabanController@store');
	Route::delete('/jawaban/{id}','JawabanController@destroy');
	Route::delete('/komentar-jawaban/{id}','KomenjawabanController@destroy');
	Route::delete('/komentar-pertanyaan/{id}','KomenpertanyaanController@destroy');
	Route::get('/komentar-pertanyaan/{id}/edit','KomenpertanyaanController@edit');
	Route::put('/komentar-pertanyaan/{id}','KomenpertanyaanController@update');
	Route::get('/jawaban/{id}/edit','JawabanController@edit');
	Route::put('/jawaban/{id}','JawabanController@update');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout');

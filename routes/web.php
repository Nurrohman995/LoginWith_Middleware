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

Route::get('/', function () {
    return view('login.formlogin');
})->name('login');

Route::get('user', function () {
    return view('login.user');
})->name('user');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('contoh','ContohController@index');
Route::post('dologin','ContohController@dologin')->name('dologin');
Route::get('gagal', function () {
    return view('login.formlogin');
});
Route::get('masuk', function () {
    return view('dashboard');
})->middleware(['auth', 'check']);
Route::get('logout','ContohController@LogOut')->name('logout');

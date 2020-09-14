<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::post('/usuario', function () {
    return 'Hola usuario';
});

Route::view('/test', 'welcome');

Route::get('user', 'UserController@index')->name('usuario');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

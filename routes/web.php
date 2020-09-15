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

Route::get('/', 'GuestController@index')->name('guest_index');

Route::post('/usuario', function () {
    return 'Hola usuario';
});

Route::view('/test', 'welcome');

Route::get('user', 'UserController@index')->name('usuario');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/entries/{entryBySlug}', 'GuestController@show')->name('show_entry');

Route::get('/entries/create', 'EntryController@create')->name('entry_create');
Route::get('/entries/{entry}/edit', 'EntryController@edit')->name('edit_entry');

Route::post('/entries', 'EntryController@store')->name('entry_store');
Route::put('/entries/{entry}', 'EntryController@update')->name('update_entry');

Route::get('/users/{user}', 'UserController@show')->name('show_user');
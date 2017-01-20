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

Route::get('/', 'HomeController@start');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('add', 'ContactsController@add');
Route::post('contact', 'ContactsController@newContact');
Route::get('contact/{contact}', 'ContactsController@show')->name('contact');
Route::get('contact/{contact}/new-number', 'ContactsController@newNumberForm');
Route::post('contact/{contact}/new-number', 'ContactsController@addNewNumber');

Route::delete('contact/{contact}/delete', 'ContactsController@deleteContact');
Route::get('number/{number}/delete', 'ContactsController@deleteNumber'); // here should've been a 'delete' request, but it didn't work out

Route::get('contact/{contact}/edit', 'ContactsController@editContactForm');
Route::post('contact/{contact}/edit', 'ContactsController@editContactSave');

Route::get('/test', function () { return view('test'); });


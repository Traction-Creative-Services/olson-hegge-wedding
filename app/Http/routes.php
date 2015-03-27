<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);
Route::get('/journey', ['uses' => 'HomeController@journey', 'as' => 'journey']);
Route::get('/wedding', ['uses' => 'HomeController@wedding', 'as' => 'wedding']);
Route::get('/events', ['uses' => 'HomeController@events', 'as' => 'events']);
Route::get('/guestbook', ['uses' => 'HomeController@guestbook', 'as' => 'guestbook']);
Route::get('/gallery', ['uses' => 'HomeController@gallery', 'as' => 'gallery']);
Route::any('/guestbook/addEntry', ['uses' => 'HomeController@addGuestbookEntry', 'as' => 'guestBookSave']);
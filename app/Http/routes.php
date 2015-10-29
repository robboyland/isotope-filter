<?php

use App\Film;
use App\Genre;

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

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::resource('films', 'FilmsController');

Route::get('/', function () {

    $films = Film::orderBy('title', 'asc')->with('genres')->get();
    $genres = Genre::orderBy('name', 'asc')->get();

    return view('list', compact('films', 'genres'));
});

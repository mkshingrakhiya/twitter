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

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/explore', 'ExploreController')->name('explore');

    Route::post('/tweets', 'TweetController@store')->name('tweets.store');

    Route::get('/profiles/{user:username}', 'ProfileController@show')
        ->name('profiles.show')
        ->middleware('password.confirm');
    Route::get('/profiles/{user:username}/edit', 'ProfileController@edit')
        ->name('profiles.edit')
        ->middleware('can:update,user');
    Route::put('/profiles/{user:username}/update', 'ProfileController@update')
        ->name('profiles.update')
        ->middleware('can:update,user');

    Route::post('/profiles/{user:username}/follow', 'ToggleFollowController')->name('toggle-follow');
});

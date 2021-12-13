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

// Welcome Page Endpoint
Route::get('/', function () {
    return view('flickx');
});

// Movie Endpoints
Route::prefix('movies')->group(function () {
    Route::get('/', 'App\Http\Controllers\MovieController@getMovies')->name('movie.list');
    Route::get('/add', 'App\Http\Controllers\MovieController@getAddMovie')->name('movie.add.page');
    Route::post('/add', 'App\Http\Controllers\MovieController@addMovie')->name('movie.add');
    Route::get('/update', 'App\Http\Controllers\MovieController@getUpdateMovie')->name('movie.update.page');
    Route::post('/update/{id}', 'App\Http\Controllers\MovieController@updateMovie')->name('movie.update');
    Route::post('/delete/{id}', 'App\Http\Controllers\MovieController@deleteMovie')->name('movie.delete');
});
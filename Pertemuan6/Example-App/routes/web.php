<?php

use App\Http\Controllers\UserController;
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

Route::get('/', 'App\Http\Controllers\PageContoller@home');
Route::get('/display' , 'App\Http\Controllers\PageContoller@display');
Route::get('/if', 'App\Http\Controllers\PageContoller@if');
Route::get('/ifelse', 'App\Http\Controllers\PageContoller@ifelse');
Route::get('/switch',   'App\Http\Controllers\PageContoller@switch');
Route::get('/for',  'App\Http\Controllers\PageContoller@for');
Route::get('/foreach',  'App\Http\Controllers\PageContoller@foreach');
Route::get('/forelse', 'App\Http\Controllers\PageContoller@forelse');
Route::get('/while', 'App\Http\Controllers\PageContoller@while');
Route::get('/continuebreak', 'App\Http\Controllers\PageContoller@continuebreak');

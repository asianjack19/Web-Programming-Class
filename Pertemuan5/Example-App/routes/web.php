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

Route::get('/', function () {
    return view('home');
});
Route::get('/display',function(){
	$a = "Hello";
	$b = "World";
	return view('display',compact('a','b'),["name" => "Michael"]);
});
Route::get('/if', function () {
    return view('if');
});
Route::get('/ifelse', function () {
    return view('ifelse');
});
Route::get('/switch', function () {
    return view('switch');
});
Route::get('/for', function () {
    return view('for');
});
Route::get('/foreach', function () {
    return view('foreach');
});
Route::get('/forelse', function () {
    return view('forelse');
});
Route::get('/while', function () {
    return view('while');
});
Route::get('/continuebreak', function () {
    return view('continuebreak');
});

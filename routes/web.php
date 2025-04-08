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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'FrontController@index');

Route::get('/login', 'FrontController@login');
Route::get('/signup', 'FrontController@signup');

Route::get('/become-local-expert', 'FrontController@becomeLocalExpert');
Route::get('/tour-list', 'FrontController@tourList');


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

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Auth::routes();

// Route::get('/app', 'HomeController@index')->name('app');


Route::get('/', function () {
    return view('welcom');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/page', function () {
    return view('page');
});
Route::get('/welcom', function () {
    return view('welcom');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
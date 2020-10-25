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

// Route::get('/', 'MainController@home')->name('mainpage');
// Route::get('/a', 'MainController@a')->name('apage');
// Route::get('/testing','MainController@test')->name('testingpage');

Route::get('/', 'MyController@home')->name('homepage');
Route::get('/movie', 'MyController@movie')->name('moviepage');
Route::get('/about', 'MyController@about')->name('aboutpage');
Route::get('/contact', 'MyController@contact')->name('contactpage');
Route::get('/tvshow', 'MyController@tvshow')->name('tvshowpage');

// working
Route::get('/service', 'MyController@service')->name('servicepage');


// CRUD for Student table
Route::resource('student','StudentController'); //resource route{get,post,put,delete}
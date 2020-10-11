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

// PAGE ROUTE
Route::get('/', 'App\Http\Controllers\PageController@home');
Route::get('/about', 'App\Http\Controllers\PageController@about');
Route::get('/faqs', 'App\Http\Controllers\PageController@faqs');
// Route::get('/contact', 'App\Http\Controllers\PageController@contact');

// MAILER
Route::get('/contact', 'App\Http\Controllers\EmailusController@showContactForm');
Route::post('/contact', 'App\Http\Controllers\EmailusController@sendMail');
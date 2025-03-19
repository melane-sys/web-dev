<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/getdladla', function () {
    return view('getdladla');
});

Route::get('/business', function () {
    return view('business');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/skolo', function () {
    return view('skolo');
});

Route::get('/hosting', function () {
    return view('hosting');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/signup', function () {
    return view('auth.signup');
});

Route::get('/vacancies', function () {
    return view('vacancies');
});

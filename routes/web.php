<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentRegistrationController;
use App\Http\Controllers\StudentController;

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

// Student Registration Routes
Route::get('/student/register', [StudentController::class, 'showRegistrationForm'])->name('student.register');
Route::post('/student/register', [StudentController::class, 'register'])->name('student.register.submit');
Route::get('/student/registration-success', [StudentController::class, 'showRegistrationSuccess'])->name('registration.success');

Route::get('/vacancies', function () {
    return view('vacancies');
});

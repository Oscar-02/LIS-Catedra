<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productsController;

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
    return view('pages.home');
}) -> name('main');

/* Route::get('/store', function () {
    return view('pages.store');
}) -> name('store'); */

Route::get('/store', [productsController::class, 'index']) -> name('store');

Route::get('/about', function () {
    return view('pages.home');
}) -> name('about');

Route::get('/contact', function () {
    return view('pages.contact');
}) -> name('contact');

Route::get('/header', function () {
    return view('assets.header');
});

Route::get('/footer', function () {
    return view('assets.footer');
});

Route::get('/login', function () {
    return view('auth.login');
}) -> name('login');

Route::get('/signup', function () {
    return view('auth.signup');
}) -> name('signup');


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

Route::get('base', function () {
    return view('admin.base');
}) -> name('base');

Route::get('/admin/products', [productsController::class, 'indexAdmin']) -> name('admin-products');

Route::get('/admin/products/show/{id}', [productsController::class, 'show']) -> name('admin-products-show');

Route::get('/admin/products/create', [productsController::class, 'create']) -> name('admin-products-create');

Route::post('/admin/products', [productsController::class, 'store']) -> name('admin-products-store');

Route::get('/admin/products/edit/{id}', [productsController::class, 'edit']) -> name('admin-products-edit');

Route::post('/admin/products', [productsController::class, 'update']) -> name('admin-products-update');

Route::get('/admin/products/delete/{id}', [productsController::class, 'destroy']) -> name('admin-products-delete');

Route::get('/admin/clients', function () {
    return view('admin.clients.all');
}) -> name('admin-clients');

Route::get('/admin/admins', function () {
    return view('admin.admins.all');
}) -> name('admin-admins');


Route::get('/admin/orders', function () {
    return view('admin.orders.all');
}) -> name('admin-orders');

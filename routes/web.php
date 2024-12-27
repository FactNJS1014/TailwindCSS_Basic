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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/netflix', function () {
    return view('netflix');
});
Route::get('/login', function () {
    return view('loginflix');
});

Route::get('/lotto', function () {
    return view('lotto');
});

Route::get('/sidebar', function () {
    return view('sidebar');
});

Route::get('/page1', function () {
    return view('page1');
})->name('page1');

Route::get('/delivery', function () {
    return view('delivery');
});

Route::get('/factshopee', function () {
    return view('fshopee');
});

Route::get('/sidebar2', function () {
    return view('sidebar2');
});

Route::get('/page2', function () {
    return view('page2');
})->name('page2');

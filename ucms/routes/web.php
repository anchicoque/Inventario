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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/categorias', function () {
    return view('categorias');
});

// Route::get('/home', function () {
//     return view('home');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::view('/productos', 'productos');
    Route::view('/categorias', 'categorias');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

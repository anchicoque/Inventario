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
    //return "hola mundo desde el router";
    ////return response()->json(['hola mundo json' => 'mundo']);
    //return view('home');
    //return view(view: 'dashboard');
});

// Route::view('home', 'home')->name('home');
// Route::view('calculadora', 'calculadora')->name('calculadora');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::view('calculadora', 'calculadora')->name('calculadora');
    Route::view('home', 'home')->name('home');
});

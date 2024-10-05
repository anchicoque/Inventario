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
    // return view('home');
    // return ('hola mundo en texto');    
});

//Route::view('/home', 'home')->name('home');

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
    Route::view('/home', 'home')->name('home');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

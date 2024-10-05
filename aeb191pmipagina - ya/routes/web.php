<?php

use Illuminate\Routing\Route as RoutingRoute;
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
    //return response()->json(['hola mundo json' => 'mundo']);
    //return view('home');
});

//Route::view('/', 'home')->name('home');
Route::view('acerca-de', 'about')->name('about');

Route::get('get', 'BlogController@index')->name('blog.index');
Route::get('blog/{post:slug}', 'BlogController@show')->name('blog.show');

Route::view('contactos', 'contact')->name('contact');

Route::view('calculadora', 'calculadora')->name('calculadora');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

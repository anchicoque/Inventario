<?php

declare(strict_types=1);

// use App\Http\Controllers\Auth\AuthenticatedSessionController;
// use App\Http\Controllers\TenantController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/', function () {
        //return 'Esta es su aplicación multiinquilino. La identificación del inquilino actual es ' . tenant('id');
        return view('tenancy.welcome');
    });

    Route::middleware('auth')->group(function (){
        Route::get('/dashboard', function(){
            return view('tenancy.dashboard');
        })->name('dashboard');
    });
    
    require __DIR__.'/auth.php';

    // Route::middleware('auth')->group(function () {
    //     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // });    
    
    //AAC: borrar
    // Route::get('/hola', function () {
    //     //return view('welcome');
    //     return 'Hola, mundo!';
    // });
});

// Route::middleware('auth')->group(function () {
// Route::middleware([
//     'auth',
//     InitializeTenancyByDomain::class,
//     PreventAccessFromCentralDomains::class,
// ])->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//     Route::resource('tenants', TenantController::class)->except(['show']);
// });



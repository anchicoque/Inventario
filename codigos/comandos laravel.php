
user: ing.anchicoque@gmail.com
pass: 123456789

php artisan --version

composer create-project laravel/laravel (example-app)
composer create-project --prefer-dist laravel/laravel:^10.33.0 tiendita
composer create-project --prefer-dist laravel/laravel:^10.33 tiendita
composer create-project --prefer-dist laravel/laravel:^10 tiendita

___________________________________

Proyecto lareavel con plantilla de adminlte

<?php

composer require jeroennoten/laravel-adminlte
php artisan adminlte:install

home.blade.php

    @extends('adminlte::page')

    @section('title', 'Dashboard')

    @section('content_header')
        <h1>Dashboard</h1>
    @stop

    @section('content')
        <p>Welcome to this beautiful admin panel.</p>
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
        <script> console.log('Hi!'); </script>
    @stop
_________________________________

13-11-2023
_________________________________

https://packagist.org/packages/ibex/crud-generator

composer require laravel/ui //integrar el proyecto laravel con bootstrap
php artisan ui bootstrap --auth //para el login

npm install && npm run dev // instalar npm y inicializarlo

web.php
    Route::get('/', function () {
        return view('auth.login');
    });

AppServiceProvider.php //agregar estas lineas

	use Illuminate\Support\Facades\Schema;

	public function boot(): void
    {
        Schema::defaultStringLength(191);
    }

php artisan migrate


php artisan make:migration contactos    

    public function down(): void
    {
        Schema::create("contactos", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("nombre");
            $table->string("direccion");
            $table->string("telefono");
            $table->string("correo");
            $table->timestamps();
        });
    }

php artisan migrate:fresh // corrige las migraciones

==================
crud-generator
https://github.com/awais-vteams/laravel-crud-generator

paquete Laravel Generator proporciona y genera controladores, modelos (con relaciones elocuentes) y vistas en Bootstrap para el desarrollo de sus aplicaciones con un solo comando.

Creará modelo con relaciones elocuentes.
Creará un controlador con todos los recursos.
Creará vistas en Bootstrap

Pasos:

// Para instalar el login de auth de laravel con bootstrap
composer require laravel/ui //integrar el proyecto laravel con bootstrap
php artisan ui bootstrap --auth //para el login
npm install && npm run dev // instalar npm y inicializarlo

php artisan make:migration contactos //crea la migración y se procede a agregar los campos

    public function down(): void
    {
        Schema::create("contactos", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("nombre");
            $table->string("direccion");
            $table->string("telefono");
            $table->string("correo");
            $table->timestamps();
        });
    }

php artisan migrate //corre las migraciones pendientes y crea la tabla

composer require ibex/crud-generator --dev //
php artisan vendor:publish --tag=crud //publicar las configuraciones
php artisan make:crud contactos // crea el crud contactos

web.php
    
    //convertir el login como home
    Route::get('/', function () {
        return view('auth.login');
    });

    //Agregar una ruta en web.php debajo de Auth:routes();
    Route::resource('contactos', App\Http\Controllers\ContactosController::class);//no pide logearse
    Route::resource('contactos', App\Http\Controllers\ContactosController::class)->middleware('auth');//pide logearse
    ej: Route::resource('contactos', 'ContactosController');//revisar este metodo corto

view/layouts/app.blade.php

    //agregar codigo en el  

    <!-- Left Side Of Navbar -->
    
    <ul class="navbar-nav me-auto">
        @auth
        <a class="nav-link" href="{{ route('contactos.index') }}">{{ __('Contactos') }}</a>
        @endauth
    </ul>

_______________________________________

Proyecto laravel con jetstream - Livewire

//instalar Jetstream en su nuevo proyecto Laravel
composer require laravel/jetstream

//Creación de equipo
php artisan jetstream:install livewire --teams

//incluir compatibilidad con el "modo oscuro"
php artisan jetstream:install livewire --dark

npm install && npm run dev // instalar npm y inicializarlo

php artisan migrate // correr las migraciones


_______________________________________

Proyecto laravel con voyager - jetstream - Livewire 



    

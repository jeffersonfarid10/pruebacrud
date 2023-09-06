<?php

//IMPORTAR LOS CONTROLADORES USER Y VIDEOGAME
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideogameController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //SI INGRESA CORRECTAMENTE, ENVIAR A LA VISTA CON MENU PARA INGRESAR AL CRUD DE USUARIOS O CRUD DE VIDEOJUEGOS
    //Route::get('/panel', function() {
    //    return view('panel');
    //})->name('panel');
});

//RUTA TIPO RESOURCE PARA EL CRUD DE USUARIOS
Route::resource('dashboard/users', UserController::class)->middleware('auth')->names('user.crud');

//RUTA TIPO RESOURCE PARA EL CRUD DE VIDEOJUEGOS
Route::resource('dashboard/videogames', VideogameController::class)->middleware('auth')->names('videogame.crud');




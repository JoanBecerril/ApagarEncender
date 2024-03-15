<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LoginController;



// PAGINA LOGIN

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('login');
})->name('login');

Route::post('login', [LoginController::class, 'store'])->name('login.store');



// PAGINAS PRINCIPALES

Route::get('admin', function () {
    session_start();
    if (!isset($_SESSION['email'])) {
        return redirect()->route('login')->with('error', 'Debes iniciar sesión para acceder a esta página');
    }
    return app()->make(ClienteController::class)->admin();
})->name('admin');

Route::get('gestorequipo', function () {
    session_start();
    if (!isset($_SESSION['email'])) {
        return redirect()->route('login')->with('error', 'Debes iniciar sesión para acceder a esta página');
    }
    return app()->make(ClienteController::class)->gestorequipo();
})->name('gestorequipo');

Route::get('tecnico', function () {
    session_start();
    if (!isset($_SESSION['email'])) {
        return redirect()->route('login')->with('error', 'Debes iniciar sesión para acceder a esta página');
    }
    return app()->make(ClienteController::class)->tecnico();
})->name('tecnico');

Route::get('cliente', function () {
    session_start();
    if (!isset($_SESSION['email'])) {
        return redirect()->route('login')->with('error', 'Debes iniciar sesión para acceder a esta página');
    }
    return app()->make(ClienteController::class)->cliente();
})->name('cliente');



// FILTROS ORDEN (ASC - DESC)

Route::get('cliente/nuevas', function () {
    session_start();
    if (!isset($_SESSION['email'])) {
        return redirect()->route('login')->with('error', 'Debes iniciar sesión para acceder a esta página');
    }
    return app()->make(ClienteController::class)->incidenciasNuevas();
})->name('cliente.nuevas');

Route::get('cliente/antiguas', function () {
    session_start();
    if (!isset($_SESSION['email'])) {
        return redirect()->route('login')->with('error', 'Debes iniciar sesión para acceder a esta página');
    }
    return app()->make(ClienteController::class)->incidenciasAntiguas();
})->name('cliente.antiguas');



// PAGINA NUEVA INCIDENCIA

Route::get('nueva', function () {
    session_start();
    if (!isset($_SESSION['email'])) {
        return redirect()->route('login')->with('error', 'Debes iniciar sesión para acceder a esta página');
    }
    return app()->make(ClienteController::class)->nueva();
})->name('nueva');

Route::post('nueva', [ClienteController::class, 'nuevaIncidencia'])->name('nuevaIncidencia');



// PAGINA VER INCIDENCIA EN GRANDE

Route::get('{id}', function ($id) {
    session_start();
    if (!isset($_SESSION['email'])) {
        return redirect()->route('login')->with('error', 'Debes iniciar sesión para acceder a esta página');
    }
    return app()->make(ClienteController::class)->incidencia($id);
})->name('incidencia');
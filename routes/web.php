<?php

use Illuminate\Support\Facades\Route;
use App\Models\Empresa;

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

Route::get('/contato', function () {
    return view('contact');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    // Rotas que requerem autenticação
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::prefix('clientes')->group(function () {
        Route::get('/', [App\Http\Controllers\ClientesController::class, 'index'])->name('clientes');
        Route::get('/data', [App\Http\Controllers\ClientesController::class, 'data'])->name('clientes.data');
        Route::get('/create', [App\Http\Controllers\ClientesController::class, 'create'])->name('clientes.create');
        Route::post('/store', [App\Http\Controllers\ClientesController::class, 'store'])->name('clientes.store');
    });
});

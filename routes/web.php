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
    
    /*
    / exemplo com prefixo "estoque":  tipo na url chama assim: http://localhost/estoque e http://localhost/estoque/create
    */
    // Route::prefix('estoque')->group(function () {
    //     Route::get('/', function () {
    //         return view('estoque.index');
    //     });
    //     Route::get('create', function () {
    //         return view('estoque.create');
    //     });
    // });
    /*
    / exemplo sem prefixo":  tipo na url chama assim:  http://localhost/estoque e http://localhost/estoque/create
    */
    // Route::get('/estoque', function () {
    //     return view('estoque.index');
    // });
    // Route::get('/estoque/create', function () {
    //     return view('estoque.index');
    // });
    
    Route::prefix('clientes')->group(function () {
        Route::get('/', [App\Http\Controllers\ClientesController::class, 'index'])->name('clientes');
        Route::get('/data', [App\Http\Controllers\ClientesController::class, 'data'])->name('clientes.data');
        Route::get('/create', [App\Http\Controllers\ClientesController::class, 'create'])->name('clientes.create');
        Route::post('/store', [App\Http\Controllers\ClientesController::class, 'store'])->name('clientes.store');
        
    });
    Route::prefix('estoque')->group(function (){
        Route::get('/', function () {
            return view('estoque.index');
        });
        Route::get('create', function () {
            return view('estoque.create');
        });
    });

    Route::prefix('vendas')->group(function (){
        Route::get('/', function () {
            return view('vendas.index');
        });
        Route::get('create', function () {
            return view('vendas.create');
        });
    });

    Route::prefix('pendencias')->group(function (){
        Route::get('/', function () {
            return view('pendencias.index');
        });
        Route::get('create', function () {
            return view('pendencias.create');
        });
    
    });
});

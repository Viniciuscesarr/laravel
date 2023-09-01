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

Route::post('/teste', function () {
    echo "<pre>";

    Empresa::where('razao_social','Dyemerson')->update([
        'razao_social' => 'Ayla'
    ]);

    $teste = Empresa::all();

    print_r($teste);

});


Route::get('/contato', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

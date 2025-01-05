<?php

use App\Models\Lot;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoxController;
use App\Http\Controllers\LotController;
use App\Http\Controllers\AcopioController;
use App\Http\Controllers\TarimaController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ReferenteController;
use App\Http\Controllers\DetalletarimaController;
use App\Http\Controllers\DocumentoController;

Route::get('/', function () {
    return redirect('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('customers', CustomerController::class)->except('destroy');
    Route::resource('acopios', AcopioController::class)->except('destroy');
    Route::resource('recibas', LotController::class)->except('destroy');
    Route::get('reciba/{id}', [LotController::class,'reciba'])->name('reciba');
    Route::resource('tarimas', TarimaController::class)->except('destroy');
    Route::resource('cajas', BoxController::class)->except('destroy');
    Route::resource('detalletarimas', DetalletarimaController::class)->except('destroy');
    Route::resource('documentos', DocumentoController::class)->except('destroy');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Models\Alegretp;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', [ProductoController::class, 'find']);
Route::get('/alegre', function () {
    return view('alegre');
})->name('alegre.welcome');


Route::post('/alegre', [ProductoController::class, 'store'])->name('alegre.store');

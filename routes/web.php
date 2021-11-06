<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\Home\IndexController::class, 'index'])->name('home');
Route::post('/addWallet', [\App\Http\Controllers\Wallet\AddController::class, 'add'])->name('addWallet');

Route::prefix('amount')->group(function () {
    Route::post('/add', [\App\Http\Controllers\Wallet\AmountController::class, 'add'])->name('addAmount');
    Route::post('/subtract', [\App\Http\Controllers\Wallet\AmountController::class, 'subtract'])->name('subtractAmount');
});

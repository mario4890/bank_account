<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::prefix('wallets')->group(function () {
    Route::get('/', [\App\Http\Controllers\Api\Wallet\GetController::class, 'all']);
    Route::post('/add', [\App\Http\Controllers\Api\Wallet\AddController::class, 'add']);

    Route::prefix('amount')->group(function () {
        Route::put('/add', [\App\Http\Controllers\Api\Wallet\AmountController::class, 'add']);
        Route::put('/subtract', [\App\Http\Controllers\Api\Wallet\AmountController::class, 'subtract']);
    });
});

<?php

use App\Http\Controllers\RelationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('relation')->group(function () {
    Route::prefix('has-one')->group(function () {
        Route::get('/', [RelationController::class, 'hasOne']);
        Route::get('reverse', [RelationController::class, 'hasOneReverse']);
    });
});

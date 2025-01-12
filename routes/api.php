<?php

use App\Http\Controllers\AppearanceController;
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

    Route::prefix('appearance')->group(function () {
        Route::get('visible', [AppearanceController::class, 'visible']);
        Route::get('hidden', [AppearanceController::class, 'hidden']);
    });

    Route::prefix('condition')->group(function () {
        Route::get('for-sub-relation', [RelationController::class, 'conditionForRelation']);
        Route::get('where-has', [RelationController::class, 'conditionWhereHas']);
        Route::get('where-doesnt-have', [RelationController::class, 'conditionWhereDoesntHave']);
        Route::get('where-date', [RelationController::class, 'conditionWhereDateForRelation']);
    });
});

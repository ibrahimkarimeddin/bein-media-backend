<?php

use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\DiscountController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\ItemController;
use App\Http\Controllers\Dashboard\User4Controller;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
|
*/




Route::prefix('admin')->group(function () {


    // auth api
    Route::post('/auth', [AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function () {

        //home api
        Route::get('/home', [HomeController::class, 'getStatics']);
        // category api
        Route::prefix('category')->group(function () {
            Route::get('/getAll', [CategoryController::class, 'getAll']);
            Route::get('/', [CategoryController::class, 'getOne']);
            Route::post('/add', [CategoryController::class, 'create']);
            Route::post('/update', [CategoryController::class, 'update']);
            Route::post('/delete', [CategoryController::class, 'delete']);
        });

        // item api
        Route::prefix('item')->group(function () {
            Route::get('/getOne', [ItemController::class, 'getOne']);
            Route::get('/getAll', [ItemController::class, 'getAll']);
            Route::post('/add', [ItemController::class, 'create']);
            Route::post('/update', [ItemController::class, 'update']);
            Route::post('/delete', [ItemController::class, 'delete']);
        });

        // discount api
        Route::prefix('discount')->group(function () {
            Route::get('/getAll', [DiscountController::class, 'getAll']);
            Route::post('/add', [DiscountController::class, 'create']);
            Route::post('/update', [DiscountController::class, 'update']);
            Route::post('/delete', [DiscountController::class, 'delete']);
        });
    });
});

<?php

use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Dashboard\User4Controller;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Website Routes
|--------------------------------------------------------------------------
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/' , [HomeController::class  , 'getHomeData']);
Route::get('/item' , [HomeController::class  , 'getItem']);


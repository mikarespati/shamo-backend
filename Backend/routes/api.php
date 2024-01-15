<?php

use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
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



Route::get('products', 'App\Http\Controllers\Api\ProductController@all');
Route::get('categories', 'App\Http\Controllers\Api\ProductCategoryController@all');

Route::post('register', 'App\Http\Controllers\Api\UserController@register');
Route::post('login', 'App\Http\Controllers\Api\UserController@login');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', 'App\Http\Controllers\Api\UserController@fetch');
    Route::post('user', 'App\Http\Controllers\Api\UserController@updateProfile');
    Route::post('logout', 'App\Http\Controllers\Api\UserController@logout');

    Route::get('transactions', 'App\Http\Controllers\Api\TransactionController@all');
    Route::post('checkout', 'App\Http\Controllers\Api\TransactionController@checkout');
});
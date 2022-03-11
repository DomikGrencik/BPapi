<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\PatientController;

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

Route::prefix('v1')->group(function () {
    Route::post(
        'register',
        [AuthController::class, 'register']
    );
    Route::middleware('auth:api')->delete(
        'unregister',
        [AuthController::class, 'unregister']
    );
    Route::post(
        'login',
        [AuthController::class, 'login']
    );
    Route::middleware('auth:api')->post(
        'logout',
        [AuthController::class, 'logout']
    );

    Route::middleware('auth:api')->get(
        'users',
        [UserController::class, 'index']
    );
    Route::middleware('auth:api')->get(
        'profile',
        [UserController::class, 'show']
    );
    Route::middleware('auth:api')->put(
        'profile/update',
        [UserController::class, 'update']
    );
});

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
    Route::middleware('auth')->delete(
        'unregister',
        [AuthController::class, 'unregister']
    );
    Route::post(
        'login',
        [AuthController::class, 'login']
    );
    Route::middleware('auth')->post(
        'logout',
        [AuthController::class, 'logout']
    );

    Route::middleware('auth')->resource(
        'users',
        [UserController::class]
    );
    Route::middleware('auth')->get(
        'me',
        [UserController::class, 'show']
    );
    Route::middleware('auth')->put(
        'me/update',
        [UserController::class, 'update']
    );
});

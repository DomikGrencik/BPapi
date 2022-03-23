<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\PatientController;
use \App\Http\Controllers\TaskController;
use \App\Http\Controllers\TestController;
use \App\Http\Controllers\TestTaskController;

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
    Route::controller(AuthController::class)->group(function () {
        Route::post('login', 'login');
    });
    Route::middleware('auth')->group(function () {
        Route::controller(AuthController::class)->group(function () {
            Route::post('register', 'register');
            Route::post('logout', 'logout');
        });
        Route::controller(UserController::class)->group(function () {
            Route::get('users', 'index');
            Route::put('users/{user}', 'update');
            Route::get('profile', 'show');
            Route::put('profile', 'update');
            Route::delete('users/{user}', 'destroy');
        });
        Route::controller(PatientController::class)->group(function () {
            Route::get('patients', 'index');
            Route::post('patients', 'store');
            Route::get('patients/{patient}', 'show');
            Route::put('patients/{patient}', 'update');
            Route::delete('patients/{patient}', 'destroy');
        });
        Route::controller(TaskController::class)->group(function () {
            Route::get('tasks', 'index');
            Route::get('tasks/getTestTask', 'getTestTask');
            Route::get('tasks/getShortTestTask', 'getShortTestTask');
            Route::get('tasks/{task}', 'show');
        });
        Route::controller(TestController::class)->group(function () {
            Route::post('tests', 'store');
            Route::delete('tests/{test}', 'destroy');
        });
        Route::controller(TestTaskController::class)->group(function () {
            Route::post('test_tasks', 'store');
            Route::post('test_tasks/{task}', 'update');
            Route::get('test_tasks/{task}', 'getTestPoints');
        });
    });

    // Route::post(
    //     'patients/store',
    //     [PatientController::class, 'store']
    // );

    // Route::get(
    //     'patients',
    //     [PatientController::class, 'index']
    // );

    // Route::delete(
    //     'patients',
    //     [PatientController::class, 'destroy']
    // );
});

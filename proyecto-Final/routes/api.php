<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controlers\Api\V1\MotorcycleController;
use App\Http\Controllers\Api\V1\Auth\AuthController;












Route::prefix('v1')->group(function () {
    
    Route::post ('register', [AuthController::class, 'register']);
    Route::post ('login', [AuthController::class, 'login']);

    Route::group(['middleware' => 'jwt.auth'], function () {

         Route::get('me', [AuthController::class, 'me']);
         Route::post('logout', [AuthController::class, 'logout']);



         Route::apiResource('motorcycleS', MotorcycleController::class);
    });
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CustomerController;
use App\Http\Controllers\Api\V1\ReservationController;
use App\Http\Controllers\Api\V1\AdminController;
use App\Http\Controllers\Api\V1\VoitureController;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function(){
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('reservations', ReservationController::class);
    Route::apiResource('admin', AdminController::class);
    Route::apiResource('voiture', VoitureController::class);

});

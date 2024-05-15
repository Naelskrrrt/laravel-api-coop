<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CustomerController;
use App\Http\Controllers\Api\V1\ReservationController;
use App\Http\Controllers\Api\V1\AdminController;
use App\Http\Controllers\Api\V1\VoitureController;

Route::get('/', function () {
    return view('welcome');
});



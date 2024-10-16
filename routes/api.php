<?php

use App\Http\Controllers\DatesController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\PetsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'users'], function(){
    Route::get('/', [UsersController::class, 'index']);
    Route::post('/', [UsersController::class, 'new']);
    Route::get('/{id}', [UsersController::class, 'view']);
    Route::put('/{id}', [UsersController::class, 'edit']);

});

Route::group(['prefix' => 'mascotas'], function(){
    Route::get('/', [PetsController::class, 'index']);
    Route::post('/', [PetsController::class, 'new']);
    Route::get('/{id}', [PetsController::class, 'view']);
    Route::put('/{id}', [PetsController::class, 'edit']);
    Route::delete('/{id}', [PetsController::class, 'delete']);
});

Route::group(['prefix' => 'servicios'], function(){
    Route::get('/', [ServicesController::class, 'index']);
    Route::post('/', [ServicesController::class, 'new']);
});

Route::group(['prefix' => 'citas'], function(){
    Route::get('/', [DatesController::class, 'index']);
    Route::post('/', [DatesController::class, 'new']);
    Route::get('/{id}', [DatesController::class, 'view']);
    Route::put('/{id}',[DatesController::class, 'edit']);
    Route::delete('/{id}', [DatesController::class, 'delete']);
});

Route::group(['prefix' => 'pagos'], function(){
    Route::get('/', [PaymentsController::class, 'index']);
    Route::post('/', [PaymentsController::class, 'new']);
});



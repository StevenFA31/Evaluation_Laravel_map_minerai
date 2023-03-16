<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\MineraiController;

use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);


Route::get('/zone', [ZoneController::class, 'list']);
Route::get('/zone/create', [ZoneController::class, 'create']);
Route::post('/zone/create', [ZoneController::class, 'create']);
Route::get('/zone/show/{id}', [ZoneController::class, 'show']);
Route::get('/zone/update/{id}', [ZoneController::class, 'update']);
Route::post('/zone/update', [ZoneController::class, 'update']);
Route::get('/zone/delete/{id}', [ZoneController::class, 'delete']);



Route::get('/minerai', [MineraiController::class, 'list']);
Route::get('/minerai/create', [MineraiController::class, 'create']);
Route::post('/minerai/create', [MineraiController::class, 'create']);
Route::get('/minerai/show/{id}', [MineraiController::class, 'show']);
Route::get('/minerai/update/{id}', [MineraiController::class, 'update']);
Route::post('/minerai/update', [MineraiController::class, 'update']);
Route::get('/minerai/delete/{id}', [MineraiController::class, 'delete']);
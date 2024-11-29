<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/',[AuthController::class,'login']);
Route::post('login',[AuthController::class,'login_insert']);
Route::get('register',[AuthController::class,'register']);
Route::get('forgot',[AuthController::class,'forgot']);
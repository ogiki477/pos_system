<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/',[AuthController::class,'login']);
Route::post('login',[AuthController::class,'login_insert']);
Route::get('register',[AuthController::class,'register']);
Route::get('forgot',[AuthController::class,'forgot']);


Route::group(['middleware'=>'admin'],function(){
    Route::get('admin/dashboard',[DashboardController::class,'dashboard']);
});


Route::group(['middleware'=>'user'],function(){
    Route::get('user/dashboard',[DashboardController::class,'dashboard']);
});
<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/',[AuthController::class,'login']);
Route::post('login',[AuthController::class,'login_insert']);
Route::get('register',[AuthController::class,'register']);
Route::post('register',[AuthController::class,'register_insert']);
Route::get('forgot',[AuthController::class,'forgot']);
Route::get('logout',[AuthController::class,'logout']);


Route::group(['middleware'=>'admin'],function(){
    Route::get('admin/dashboard',[DashboardController::class,'dashboard']);
    //Route::get('admin/user/list',[Usercontroller::class,'index']);

    //Category
    Route::get('admin/category/list',[CategoryController::class,'index']);
    Route::get('admin/category/add',[CategoryController::class,'create']);
    Route::post('admin/category/add',[CategoryController::class,'store']);
    
});


Route::group(['middleware'=>'user'],function(){
    Route::get('user/dashboard',[DashboardController::class,'dashboard']);
});
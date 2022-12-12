<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Controller;

Route::get('/', [Controller::class, 'welcome']);

Route::prefix("product")->group(function(){
    Route::get("/", [ProductController::class, 'index']);
    Route::get("/add", [ProductController::class, 'create']);
    Route::post("/store", [ProductController::class, 'store']);
    Route::get("/detail/{id}", [ProductController::class, 'detail']);
    Route::get("/edit/{id}", [ProductController::class, 'edit']);
    Route::put("/update/{id}", [ProductController::class, 'update']);
    Route::delete("/delete/{id}", [ProductController::class, 'delete']);
});
Route::prefix("blog")->group(function(){
    Route::get("/", [BlogController::class, 'index']);
    Route::get("/add", [BlogController::class, 'create']);
    Route::post("/store", [BlogController::class, 'store']);
    Route::get("/detail/{id}", [BlogController::class, 'detail']);
    Route::get("/edit/{id}", [BlogController::class, 'edit']);
    Route::put("/update/{id}", [BlogController::class, 'update']);
    Route::delete("/delete/{id}", [BlogController::class, 'delete']);
});
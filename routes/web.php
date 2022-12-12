<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;

Route::get('/', [Controller::class, 'welcome'])->name('homepage')->middleware(['withAuth']);

Route::prefix("product")->group(function(){
    Route::get("/", [ProductController::class, 'index'])->middleware(['withAuth']);
    Route::get("/add", [ProductController::class, 'create'])->middleware(['withAuth']);
    Route::post("/store", [ProductController::class, 'store'])->middleware(['withAuth']);
    Route::get("/detail/{id}", [ProductController::class, 'detail'])->middleware(['withAuth']);
    Route::get("/edit/{id}", [ProductController::class, 'edit'])->middleware(['withAuth']);
    Route::put("/update/{id}", [ProductController::class, 'update'])->middleware(['withAuth']);
    Route::delete("/delete/{id}", [ProductController::class, 'delete'])->middleware(['withAuth']);
});
Route::prefix("blog")->group(function(){
    Route::get("/", [BlogController::class, 'index'])->middleware(['withAuth']);
    Route::get("/add", [BlogController::class, 'create'])->middleware(['withAuth']);
    Route::post("/store", [BlogController::class, 'store'])->middleware(['withAuth']);
    Route::get("/detail/{id}", [BlogController::class, 'detail'])->middleware(['withAuth']);
    Route::get("/edit/{id}", [BlogController::class, 'edit'])->middleware(['withAuth']);
    Route::put("/update/{id}", [BlogController::class, 'update'])->middleware(['withAuth']);
    Route::delete("/delete/{id}", [BlogController::class, 'delete'])->middleware(['withAuth']);
});
Route::prefix("auth")->group(function(){
    Route::any("/login", [AuthController::class, 'login'])->name("login")->middleware(['noAuth']);
    Route::any("/logout", [AuthController::class, 'logout'])->name("logout")->middleware(['withAuth']);
});

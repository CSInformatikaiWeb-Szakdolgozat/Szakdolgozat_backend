<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MenuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum',])->get('/user', function (Request $request) {
    return $request->user();
    Route::resource('menus', MenuController::class);
    Route::resource('article', ArticleController::class);
    
});

Route::middleware(['auth:sanctum',])->get('/user', function (Request $request) {
    return $request->user();
});

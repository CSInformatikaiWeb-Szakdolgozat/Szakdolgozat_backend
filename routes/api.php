<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ClassificationController;
use App\Http\Controllers\CompanyInfoController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OtherInformationController;
use App\Http\Controllers\PartnerController;
use App\Models\Article;
use App\Models\Classification;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum',])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum',])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/article/{id}', [ArticleController::class, 'show']);
Route::post('/article', [ArticleController::class, 'store']);
Route::delete('/article/{id}', [ArticleController::class, 'destroy']);
Route::patch('/article/{id}', [ArticleController::class, 'update']);

Route::get('/partners', [PartnerController::class, 'index']);
Route::get('/partner/{id}', [PartnerController::class, 'show']);
Route::post('/partner', [PartnerController::class, 'store']);
Route::delete('/partner/{id}', [PartnerController::class, 'destroy']);
Route::patch('/partner/{id}', [PartnerController::class, 'update']);

Route::get('/menus', [MenuController::class, 'index']);
Route::get('/menu/{id}', [MenuController::class, 'show']);
Route::post('/menu', [MenuController::class, 'store']);
Route::delete('/menu/{id}', [MenuController::class, 'destroy']);
Route::patch('/menu/{id}', [MenuController::class, 'update']);

Route::get('/events', [Event::class, 'index']);
Route::get('/event/{id}', [Event::class, 'show']);
Route::post('/event', [Event::class, 'store']);
Route::delete('/event/{id}', [Event::class, 'destroy']);
Route::patch('/event/{id}', [Event::class, 'update']);

Route::get('/companyinfos', [CompanyInfoController::class, 'index']);
Route::patch('/companyinfo/{id}', [CompanyInfoController::class, 'update']);

Route::get('/classes', [ClassificationController::class, 'index']);
Route::get('/class/{id}', [ClassificationController::class, 'show']);
Route::post('/class', [ClassificationController::class, 'store']);
Route::delete('/class/{id}', [ClassificationController::class, 'destroy']);
Route::patch('/class/{id}', [ClassificationController::class, 'update']);

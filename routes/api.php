<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ClassificationController;
use App\Http\Controllers\CompanyInfoController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Editor;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// bejelentkezett admin usernek engedélyezett műveletek.
Route::middleware(['auth:sanctum', Admin::class])->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    //Cikkekel való műveletek
    //összes cikk megjelenítése
    Route::get('/articles', [ArticleController::class, 'index']);
    //egy cikk megjelenítése
    Route::get('/article/{id}', [ArticleController::class, 'show']);
    //egy új cikk létrehozása
    Route::post('/article', [ArticleController::class, 'store']);
    //egy adott cikk törlése
    Route::delete('/article/{id}', [ArticleController::class, 'destroy']);
    //egy adott cikk szerkesztése
    Route::patch('/article/{id}', [ArticleController::class, 'update']);

    //Partnerrel való műveletek
    //összes partner megjelenítése
    Route::get('/partners', [PartnerController::class, 'index']);
    //egy partner megjelenítése
    Route::get('/partner/{id}', [PartnerController::class, 'show']);
    // egy új partner létrehozása
    Route::post('/partner', [PartnerController::class, 'store']);
    //egy adott partner törlése
    Route::delete('/partner/{id}', [PartnerController::class, 'destroy']);
    //egy adott partner szerkesztése
    Route::patch('/partner/{id}', [PartnerController::class, 'update']);

    //Menükel való műveletek
    //összes menü megjelenítése
    Route::get('/menus', [MenuController::class, 'index']);
    //egy menü megjelenítése
    Route::get('/menu/{id}', [MenuController::class, 'show']);
    // egy új menü létrehozása
    Route::post('/menu', [MenuController::class, 'store']);
    //egy adott menü törlése
    Route::delete('/menu/{id}', [MenuController::class, 'destroy']);
    //egy adott menü szerkesztése
    Route::patch('/menu/{id}', [MenuController::class, 'update']);

    //Event-ekkel való műveletek
    //összes event megjelenítése
    Route::get('/events', [EventController::class, 'index']);
    //egy event megjelenítése
    Route::get('/event/{id}', [EventController::class, 'show']);
    // egy új event létrehozása
    Route::post('/event', [EventController::class, 'store']);
    //egy adott event törlése
    Route::delete('/event/{id}', [EventController::class, 'destroy']);
    //egy adott event szerkesztése
    Route::patch('/event/{id}', [EventController::class, 'update']);

    //Céginfókkal való műveletek
    //összes céginfó megjelenítése
    Route::get('/companyinfos', [CompanyInfoController::class, 'index']);
    //egy adott céginfó szerkesztése
    Route::patch('/companyinfo/{id}', [CompanyInfoController::class, 'update']);

    //Besorolással való műveletek
    //összes besorolás megjelenítése
    Route::get('/classes', [ClassificationController::class, 'index']);
    //egy besorolás megjelenítése
    Route::get('/class/{id}', [ClassificationController::class, 'show']);
    // egy új besorolás létrehozása
    Route::post('/class', [ClassificationController::class, 'store']);
    //egy adott besorolás törlése
    Route::delete('/class/{id}', [ClassificationController::class, 'destroy']);
    //egy adott besorolás szerkesztése
    Route::patch('/class/{id}', [ClassificationController::class, 'update']);

    //Felhasználóval való műveletek
    //összes felhasználó megjelenítése
    Route::get('/users', [UserController::class, 'index']);
    //egy felhasználó megjelenítése
    Route::get('/user/{id}', [UserController::class, 'show']);
    // egy új felhasználó létrehozása
    Route::post('/user', [UserController::class, 'store']);
    //egy adott felhasználó törlése
    Route::delete('/user/{id}', [UserController::class, 'destroy']);
    //egy adott felhasználó szerkesztése
    Route::patch('/user/{id}', [UserController::class, 'update']);
});

//bejelentkezett szerkesztő usernek engenyélyezet műveletek.
Route::middleware(['auth:sanctum', Editor::class])->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    //Cikkekel való műveletek
    //összes cikk megjelenítése
    Route::get('/articles', [ArticleController::class, 'index']);
    //egy cikk megjelenítése
    Route::get('/article/{id}', [ArticleController::class, 'show']);
    //egy új cikk létrehozása
    Route::post('/article', [ArticleController::class, 'store']);
    //egy adott cikk törlése
    Route::delete('/article/{id}', [ArticleController::class, 'destroy']);
    //egy adott cikk szerkesztése
    Route::patch('/article/{id}', [ArticleController::class, 'update']);

    //Partnerrel való műveletek
    //összes partner megjelenítése
    Route::get('/partners', [PartnerController::class, 'index']);
    //egy partner megjelenítése
    Route::get('/partner/{id}', [PartnerController::class, 'show']);
    // egy új partner létrehozása
    Route::post('/partner', [PartnerController::class, 'store']);
    //egy adott partner törlése
    Route::delete('/partner/{id}', [PartnerController::class, 'destroy']);
    //egy adott partner szerkesztése
    Route::patch('/partner/{id}', [PartnerController::class, 'update']);

    //Menükel való műveletek
    //összes menü megjelenítése
    Route::get('/menus', [MenuController::class, 'index']);
    //egy menü megjelenítése
    Route::get('/menu/{id}', [MenuController::class, 'show']);
    // egy új menü létrehozása
    Route::post('/menu', [MenuController::class, 'store']);
    //egy adott menü törlése
    Route::delete('/menu/{id}', [MenuController::class, 'destroy']);
    //egy adott menü szerkesztése
    Route::patch('/menu/{id}', [MenuController::class, 'update']);

    //Event-ekkel való műveletek
    //összes event megjelenítése
    Route::get('/events', [EventController::class, 'index']);
    //egy event megjelenítése
    Route::get('/event/{id}', [EventController::class, 'show']);
    // egy új event létrehozása
    Route::post('/event', [EventController::class, 'store']);
    //egy adott event törlése
    Route::delete('/event/{id}', [EventController::class, 'destroy']);
    //egy adott event szerkesztése
    Route::patch('/event/{id}', [EventController::class, 'update']);

    //Céginfókkal való műveletek
    //összes céginfó megjelenítése
    Route::get('/companyinfos', [CompanyInfoController::class, 'index']);
    //egy adott céginfó szerkesztése
    Route::patch('/companyinfo/{id}', [CompanyInfoController::class, 'update']);

    //Besorolással való műveletek
    //összes besorolás megjelenítése
    Route::get('/classes', [ClassificationController::class, 'index']);
    //egy besorolás megjelenítése
    Route::get('/class/{id}', [ClassificationController::class, 'show']);
    // egy új besorolás létrehozása
    Route::post('/class', [ClassificationController::class, 'store']);
    //egy adott besorolás törlése
    Route::delete('/class/{id}', [ClassificationController::class, 'destroy']);
    //egy adott besorolás szerkesztése
    Route::patch('/class/{id}', [ClassificationController::class, 'update']);
});

Route::get('/menus', [MenuController::class, 'index']);
Route::get('/articles', [ArticleController::class, 'index']);

// Route::get('/articles', [ArticleController::class, 'index']);
// Route::get('/article/{id}', [ArticleController::class, 'show']);
// Route::post('/article', [ArticleController::class, 'store']);
// Route::delete('/article/{id}', [ArticleController::class, 'destroy']);
// Route::patch('/article/{id}', [ArticleController::class, 'update']);

// Route::get('/partners', [PartnerController::class, 'index']);
// Route::get('/partner/{id}', [PartnerController::class, 'show']);
// Route::post('/partner', [PartnerController::class, 'store']);
// Route::delete('/partner/{id}', [PartnerController::class, 'destroy']);
// Route::patch('/partner/{id}', [PartnerController::class, 'update']);

// Route::get('/menus', [MenuController::class, 'index']);
// Route::get('/menu/{id}', [MenuController::class, 'show']);
// Route::post('/menu', [MenuController::class, 'store']);
// Route::delete('/menu/{id}', [MenuController::class, 'destroy']);
// Route::patch('/menu/{id}', [MenuController::class, 'update']);

// Route::get('/events', [Event::class, 'index']);
// Route::get('/event/{id}', [Event::class, 'show']);
// Route::post('/event', [Event::class, 'store']);
// Route::delete('/event/{id}', [Event::class, 'destroy']);
// Route::patch('/event/{id}', [Event::class, 'update']);

// Route::get('/companyinfos', [CompanyInfoController::class, 'index']);
// Route::patch('/companyinfo/{id}', [CompanyInfoController::class, 'update']);

// Route::get('/classes', [ClassificationController::class, 'index']);
// Route::get('/class/{id}', [ClassificationController::class, 'show']);
// Route::post('/class', [ClassificationController::class, 'store']);
// Route::delete('/class/{id}', [ClassificationController::class, 'destroy']);
// Route::patch('/class/{id}', [ClassificationController::class, 'update']);

// Route::get('/users', [UserController::class, 'index']);
// Route::get('/user/{id}', [UserController::class, 'show']);
// Route::post('/user', [UserController::class, 'store']);
// Route::delete('/user/{id}', [UserController::class, 'destroy']);
// Route::patch('/user/{id}', [UserController::class, 'update']);

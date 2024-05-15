<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ArticleController;
use App\Models\Parental_control;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Articulos
Route::get('articulos/listar', [ArticleController::class, 'index'])->name('article.index');
Route::get('articulos/article', [ArticleController::class, 'create']);
Route::post('articulos/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('articulos/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::delete('articulos/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');

// Avatars
Route::get('avatars/listar', [AvatarController::class, 'index'])->name('avatar.index');
Route::get('avatars/avatar', [AvatarController::class, 'create']);
Route::post('avatars/store', [AvatarController::class, 'store'])->name('avatar.store');
Route::get('avatars/{avatar}', [AvatarController::class, 'show'])->name('avatar.show');
Route::delete('avatars/{avatar}', [AvatarController::class, 'destroy'])->name('avatar.destroy');

// Ayudas
Route::get('ayudas/listar', [HelpController::class, 'index'])->name('help.index');
Route::get('ayudas/help', [HelpController::class, 'create']);
Route::post('ayudas/store', [HelpController::class, 'store'])->name('help.store');
Route::get('ayudas/{help}', [HelpController::class, 'show'])->name('help.show');
Route::delete('ayudas/{help}', [HelpController::class, 'destroy'])->name('help.destroy');

// Canjes
Route::get('canjes/listar', [ExchangeController::class, 'index'])->name('exchange.index');
Route::get('canjes/exchange', [ExchangeController::class, 'create']);
Route::post('canjes/store', [ExchangeController::class, 'store'])->name('exchange.store');
Route::get('canjes/{exchange}', [ExchangeController::class, 'show'])->name('exchange.show');
Route::delete('canjes/{exchange}', [ExchangeController::class, 'destroy'])->name('exchange.destroy');

// Controles Parentales
Route::get('controles_parentales/listar', [ParentalControlController::class, 'index'])->name('parental_control.index');
Route::get('controles_parentales/control_parental', [ParentalControlController::class, 'create']);
Route::post('controles_parentales/store', [ParentalControlController::class, 'store'])->name('parental.store');
Route::get('controles_parentales/{parentales}', [ParentalControlController::class, 'show'])->name('control_parental.show');
Route::delete('controles_parentales/{parentales}', [ParentalControlController::class, 'destroy'])->name('control_parental.destroy');

//informes 
Route::get('informes/listar', [ReportController::class, 'index'])->name('report.index');
Route::get('informes/report', [ReportController::class, 'create']);
Route::post('informes/store', [ReportController::class, 'store'])->name('report.store');
Route::get('informes/{report}', [ReportController::class, 'show'])->name('informe.show');
Route::delete('informes/{report}', [ReportController::class, 'destroy'])->name('informe.destroy');

//premios
Route::get('logros/listar', [AchievementController::class, 'index'])->name('achievement.index');
Route::get('logros/achievement', [AchievementController::class, 'create']);
Route::post('logros/store', [AchievementController::class, 'store'])->name('achievement.store');
Route::get('logros/{achievement}', [AchievementController::class, 'show'])->name('logro.show');
Route::delete('logros/{achievement}', [AchievementController::class, 'destroy'])->name('logro.destroy');
//niveles
Route::get('niveles/listar', [LevelController::class, 'index'])->name('level.index');
Route::get('niveles/levels', [LevelController::class, 'create']);
Route::post('niveles/store', [LevelController::class, 'store'])->name('level.store');
Route::get('niveles/{achievement}', [LevelController::class, 'show'])->name('nivel.show');
Route::delete('nivles/{achievement}', [LevelController::class, 'destroy'])->name('nivel.destroy');
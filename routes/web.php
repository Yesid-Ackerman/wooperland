<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ArticleController;
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

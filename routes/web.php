<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Articulos
Route::get('articulos/listar',[ArticleController::class,'index'])->name('article.index');
Route::get('articulos/article',[ArticleController::class,'create']);
Route::post('/store', [ArticleController::class,'store'])->name('article.store');
Route::get('article/{article}',[ArticleController::class,'show'])->name('article.show');
Route::delete('article/{article}',[ArticleController::class,'destroy'])->name('article.destroy');

//Avatars
Route::get('avatars/listar',[AvatarController::class,'index'])->name('avatar.index');
Route::get('avatars/avatar',[AvatarController::class,'create']);
Route::post('/store', [AvatarController::class,'store'])->name('avatar.store');
Route::get('avatar/{avatar}',[AvatarController::class,'show'])->name('avatar.show');
Route::delete('avatar/{avatar}',[AvatarController::class,'destroy'])->name('avatar.destroy');

//AYUDAS
Route::get('ayudas/listar',[HelpController::class,'index'])->name('help.index');
Route::get('ayudas/help',[HelpController::class,'create']);
Route::post('/Store', [HelpController::class,'Store'])->name('help.Store');
Route::get('help/{help}',[HelpController::class,'show'])->name('help.show');
Route::delete('help/{help}',[HelpController::class,'destroy'])->name('help.destroy');

//CANJES
Route::get('canjes/listar',[ExchangeController::class,'index'])->name('exchange.index');
Route::get('canjes/exchange',[ExchangeController::class,'create']);
Route::post('/store', [ExchangeController::class,'store'])->name('exchange.store');
Route::get('exchange/{exchange}',[ExchangeController::class,'show'])->name('exchange.show');
Route::delete('exchange/{exchange}',[ExchangeController::class,'destroy'])->name('exchange.destroy');

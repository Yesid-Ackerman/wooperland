<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\KidController;
use App\Models\Father;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Articulos
Route::get('articulos/listar',[ArticleController::class,'index'])->name('article.index');
Route::get('articulos/article',[ArticleController::class,'create']);
Route::post('/Store', [ArticleController::class,'Store'])->name('article.Store');
Route::get('article/{article}',[ArticleController::class,'show'])->name('article.show');
Route::delete('article/{article}',[ArticleController::class,'destroy'])->name('article.destroy');

//Avatars
Route::get('avatars/listar',[AvatarController::class,'index'])->name('avatar.index');
Route::get('avatars/avatar',[AvatarController::class,'create']);
Route::post('/Store', [AvatarController::class,'Store'])->name('avatar.Store');
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
Route::post('/Store', [ExchangeController::class,'Store'])->name('exchange.Store');
Route::get('exchange/{exchange}',[ExchangeController::class,'show'])->name('exchange.show');
Route::delete('exchange/{exchange}',[ExchangeController::class,'destroy'])->name('exchange.destroy');

//NIÑOS
Route::get('niños/listar',[KidController::class,'index'])->name('niños.index');
Route::get('niños/create', [KidController::class, 'create']);
Route::post('/niños/store', [KidController::class, 'store'])->name('niños.store');
Route::get('niño/{niño}',[KidController::class,'show'])->name('kid.show');
Route::delete('niño/{niño}',[KidController::class,'destroy'])->name('niño.destroy');

//PADRES
Route::get('padres/listar',[FatherController::class,'index'])->name('padres.index');
Route::get('padres/create', [FatherController::class, 'create']);
Route::post('padres/store', [FatherController::class, 'store'])->name('padres.store');
Route::get('padres/{padre}',[FatherController::class,'show'])->name('padres.show');
Route::delete('pardres/{padre}',[FatherController::class,'destroy'])->name('padres.destroy');

//niñotema
Route::get('niñotema/listar',[KidTopicsController::class,'index'])->name('niñotema.index');
Route::get('niñotema/create',[KidTopicsController::class,'create']);
Route::post('niñotema/store', [KidTopicsController::class, 'store'])->name('niñotema.store');
Route::get('niñotema/{niñotema}',[KidTopicsController::class,'show'])->name('niñotema.show');
Route::delete('niñotema/{niñotema}',[KidTopicsController::class,'destroy'])->name('niñotema.destroy');

//padretema
Route::get('padretema/listar',[FatherTopicController::class,'index'])->name('padretema.index');
Route::get('padretema/create',[FatherTopicController::class,'create']);
Route::post('padretema/store', [FatherTopicController::class, 'store'])->name('padretema.store');
Route::get('padretema/{padretema}',[FatherTopicController::class,'show'])->name('padretema.show');
Route::delete('padretema/{padretema}',[FatherTopicController::class,'destroy'])->name('padretema.destroy');

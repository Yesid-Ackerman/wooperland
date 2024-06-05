<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AvatarController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\ExchangeController;
use App\Http\Controllers\KidController;
use App\Http\Controllers\FatherController;
use App\Http\Controllers\KidTopicsController;
use App\Http\Controllers\FatherTopicController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Articulos
Route::get('articulos/listar', [ArticleController::class, 'index'])->name('article.index');
Route::get('articulos/article', [ArticleController::class, 'create']);
Route::post('articulos/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('articulos/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::put('article/{article}', [ArticleController::class, 'update'])->name('article.update');
Route::delete('articulos/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');
Route::get('article/{article}/editar', [ArticleController::class, 'edit'])->name('article.edit');

// Avatars
Route::get('avatars/listar', [AvatarController::class, 'index'])->name('avatar.index');
Route::get('avatars/avatar', [AvatarController::class, 'create']);
Route::post('avatars/store', [AvatarController::class, 'store'])->name('avatar.store');
Route::get('avatars/{avatar}', [AvatarController::class, 'show'])->name('avatar.show');
Route::put('avatar/{avatar}', [AvatarController::class, 'update'])->name('avatar.update');
Route::delete('avatars/{avatar}', [AvatarController::class, 'destroy'])->name('avatar.destroy');
Route::get('avatar/{avatar}/editar', [AvatarController::class, 'edit'])->name('avatar.edit');

// Ayudas
Route::get('ayudas/listar', [HelpController::class, 'index'])->name('help.index');
Route::get('ayudas/help', [HelpController::class, 'create']);
Route::post('ayudas/store', [HelpController::class, 'store'])->name('help.store');
Route::get('ayudas/{help}', [HelpController::class, 'show'])->name('help.show');
Route::put('ayudas/{help}', [HelpController::class, 'update'])->name('help.update');
Route::delete('ayudas/{help}', [HelpController::class, 'destroy'])->name('help.destroy');
Route::get('ayudas/{help}/editar', [HelpController::class, 'edit'])->name('help.edit');


// Canjes
Route::get('canjes/listar', [ExchangeController::class, 'index'])->name('exchange.index');
Route::get('canjes/exchange', [ExchangeController::class, 'create']);
Route::post('canjes/store', [ExchangeController::class, 'store'])->name('exchange.store');
Route::get('canjes/{exchange}', [ExchangeController::class, 'show'])->name('exchange.show');
Route::put('canjes/{exchange}', [ExchangeController::class, 'update'])->name('exchange.update');
Route::delete('canjes/{exchange}', [ExchangeController::class, 'destroy'])->name('exchange.destroy');
Route::get('canjes/{exchange}/editar', [ExchangeController::class, 'edit'])->name('exchange.edit');

//RUTAS FORMULARIO RETOS
Route::get('challenges/createchallenge',[RetosController::class,'createchallenge']);
Route::get('challenges/listchallenge',[RetosController::class,'listchallenge'])->name('list.challenge');
Route::post('challenges/readchallenge',[RetosController::class,'readchallenge'])->name('read.challenge');
Route::get('challenges/{challenges}',[RetosController::class,'showchallenge'])->name('show.challenge');
Route::delete('challenges/{challenges}',[RetosController::class,'destroychallenge'])->name('destroy.challenge');

//RUTAS FORMULARIO SUGERENCIAS
Route::get('suggestions/createsuggestion',[SugerenciasController::class,'createsuggestion']);
Route::get('suggestions/listsuggestion',[SugerenciasController::class,'listsuggestion'])->name('list.suggestion');
Route::post('suggestions/readsuggestion',[SugerenciasController::class,'readsuggestion'])->name('read.suggestion');
Route::get('suggestions/{suggestions}',[SugerenciasController::class,'showsuggestion'])->name('show.suggestion');
Route::delete('suggestions/{suggestions}',[SugerenciasController::class,'destroysuggestion'])->name('destroy.suggestion');

//RUTAS FORMULARIO TEMAS
Route::get('topics/createtopic',[TemasController::class,'createtopic']);
Route::get('topics/listtopic',[TemasController::class,'listtopic'])->name('list.Topic');
Route::post('topics/readtopic',[TemasController::class,'readtopic'])->name('read.topic');
Route::get('topics/{topics}',[TemasController::class,'showtopic'])->name('show.topic');
Route::delete('topics/{topics}',[TemasController::class,'destroytopic'])->name('destroy.topic');

//RUTAS FORMULARIO TIEMPOS
Route::get('periods/createperiod',[TiemposController::class,'createperiod']);
Route::get('periods/listperiod',[TiemposController::class,'listperiod'])->name('list.period');
Route::post('periods/readperiod',[TiemposController::class,'readperiod'])->name('read.period');
Route::get('periods/{periods}',[TiemposController::class,'showperiod'])->name('show.period');
Route::delete('periods/{periods}',[TiemposController::class,'destroyperiod'])->name('destroy.period');

// Niños
Route::get('niños/listar', [kidController::class, 'index'])->name('niños.index');
Route::get('niños/create', [kidController::class, 'create']);
Route::post('niños/store', [kidController::class, 'store'])->name('niños.store');
Route::get('niños/{niños}', [kidController::class, 'show'])->name('niños.show');
Route::delete('niños/{niños}', [kidController::class, 'destroy'])->name('niños.destroy');

//Padres
Route::get('padres/listar', [FatherController::class, 'index'])->name('padres.index');
Route::get('padres/create', [FatherController::class, 'create']);
Route::post('padres/store', [FatherController::class, 'store'])->name('padres.store');
Route::get('padres/{padres}', [FatherController::class, 'show'])->name('padres.show');
Route::delete('padres/{padres}', [FatherController::class, 'destroy'])->name('padres.destroy');

//Padre_Tema
Route::get('padretema/listar', [FatherTopicController::class, 'index'])->name('padretema.index');
Route::get('padretema/create', [FatherTopicController::class, 'create']);
Route::post('padretema/store', [FatherTopicController::class, 'store'])->name('padretema.store');
Route::get('padretema/{padretema}', [FatherTopicController::class, 'show'])->name('padretema.show');
Route::delete('padretema/{padretema}', [FatherTopicController::class, 'destroy'])->name('padretema.destroy');

//Niño_Tema
Route::get('niñotema/listar', [kidTopicsController::class, 'index'])->name('niñotema.index');
Route::get('niñotema/create', [kidTopicsController::class, 'create']);
Route::post('niñotema/store', [kidTopicsController::class, 'store'])->name('niñotema.store');
Route::get('niñotema/{niñotema}', [kidTopicsController::class, 'show'])->name('niñotema.show');
Route::delete('niñotema/{niñotema}', [kidTopicsController::class, 'destroy'])->name('niñotema.destroy');

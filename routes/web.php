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

//Canjes
Route::get('canjes/listar',[ExchangeController::class,'index'])->name('exchange.index');
Route::get('canjes/exchange',[ExchangeController::class,'create']);
Route::post('/Store', [ExchangeController::class,'Store'])->name('exchange.Store');
Route::get('exchange/{exchange}',[ExchangeController::class,'show'])->name('exchange.show');
Route::delete('exchange/{exchange}',[ExchangeController::class,'destroy'])->name('exchange.destroy');

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
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

//RUTAS FORMULARIO RETOS
route::get('challenges/createchallenge',[RetosController::class,'createchallenge']);
route::get('challenges/listchallenge',[RetosController::class,'listchallenge'])->name('list.challenge');
route::post('challenges/readchallenge',[RetosController::class,'readchallenge'])->name('read.challenge');
Route::get('challenges/{challenges}',[RetosController::class,'showchallenge'])->name('show.challenge');
Route::delete('challenges/{challenges}',[RetosController::class,'destroychallenge'])->name('destroy.challenge');

//RUTAS FORMULARIO SUGERENCIAS
route::get('suggestions/createsuggestion',[SugerenciasController::class,'createsuggestion']);
route::get('suggestions/listsuggestion',[SugerenciasController::class,'listsuggestion'])->name('list.suggestion');
route::post('suggestions/readsuggestion',[SugerenciasController::class,'readsuggestion'])->name('read.suggestion');
Route::get('suggestions/{suggestions}',[SugerenciasController::class,'showsuggestion'])->name('show.suggestion');
Route::delete('suggestions/{suggestions}',[SugerenciasController::class,'destroysuggestion'])->name('destroy.suggestion');

//RUTAS FORMULARIO TEMAS
route::get('topics/createtopic',[TemasController::class,'createtopic']);
route::get('topics/listtopic',[TemasController::class,'listtopic'])->name('list.Topic');
route::post('topics/readtopic',[TemasController::class,'readtopic'])->name('read.topic');
Route::get('topics/{topics}',[TemasController::class,'showtopic'])->name('show.topic');
Route::delete('topics/{topics}',[TemasController::class,'destroytopic'])->name('destroy.topic');

//RUTAS FORMULARIO TIEMPOS
route::get('periods/createperiod',[TiemposController::class,'createperiod']);
route::get('periods/listperiod',[TiemposController::class,'listperiod'])->name('list.period');
route::post('periods/readperiod',[TiemposController::class,'readperiod'])->name('read.period');
Route::get('periods/{periods}',[TiemposController::class,'showperiod'])->name('show.period');
Route::delete('periods/{periods}',[TiemposController::class,'destroyperiod'])->name('destroy.period');
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
Route::put('article/{article}', [ArticleController::class, 'update'])->name('article.update');
Route::delete('articulos/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');
Route::get('article/{article}/editar', [ArticleController::class, 'edit'])->name('article.edit');

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

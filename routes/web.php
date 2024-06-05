<?php

namespace App\Http\Controllers;
use App\Http\Controllers\KidController;
use App\Http\Controllers\FatherController;
use App\Http\Controllers\KidTopicsController;
use App\Http\Controllers\FatherTopicController;
use App\Models\Father;
use App\Models\FatherTopic;
use App\Models\kid;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});






































































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

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

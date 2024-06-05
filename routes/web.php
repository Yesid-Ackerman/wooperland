<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ArticleController;
use App\Models\Parental_control;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

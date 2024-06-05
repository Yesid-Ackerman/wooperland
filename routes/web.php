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

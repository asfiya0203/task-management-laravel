<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('jadwal', JadwalController::class);
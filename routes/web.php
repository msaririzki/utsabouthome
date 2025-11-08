<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// kalau about-mu belum ada controllernya, boleh sementara langsung ke view
Route::get('/about', [AboutController::class, 'index'])->name('about');

<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/signup', [SignUpController::class, 'index'])->name('signup');
Route::post('/signup', [SignUpController::class, 'create'])->name('signup.create');
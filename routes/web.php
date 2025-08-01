<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class, 'home'])->name('home');


Route::get('/admin', [LoginController::class, 'loginform'])->name('login');
Route::post('/admin', [LoginController::class, 'login'])->name('login');

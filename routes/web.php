<?php

use App\Http\Controllers\KaderDasawisma\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\LandingPageController::class, 'index'])->name('landingPage');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


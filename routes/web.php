<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('admin', 'admin')
    ->middleware(['auth', 'verified'])
    ->name('admin');

Route::view('doctor', 'doctor')
    ->middleware(['auth', 'verified'])
    ->name('doctor');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';

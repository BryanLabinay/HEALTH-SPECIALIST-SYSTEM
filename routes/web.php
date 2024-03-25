<?php

use App\Http\Controllers\CTRLAppointment;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('add-appointment', [CTRLAppointment::class, 'create'])->name('add.appointment');

Route::post('add-appointment', [CTRLAppointment::class, 'store'])->name('add.appointment');

Route::get('appointment-list', [CTRLAppointment::class, 'index'])->name('appointment.list');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', 'user'])
    ->name('dashboard');

Route::view('admin', 'admin')
    ->middleware(['auth', 'verified', 'admin'])
    ->name('admin');

Route::view('doctor', 'doctor')
    ->middleware(['auth', 'verified', 'doctor'])
    ->name('doctor');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';

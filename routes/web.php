<?php

use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

 // -------

// Route::get('/employee', [HomeController::class, 'index']); 

Route::get('/employee', [EmployeeController::class, 'index'])->name('employee');

Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee-create');

Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');

// ------

require __DIR__.'/auth.php';

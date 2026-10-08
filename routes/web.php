<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/** Login Page */
Route::get('/admin/login', [LoginController::class, 'adminLogin'])->name('admin.login');
Route::get('/admin/dashboard', [LoginController::class, 'adminDashboard'])->name('admin.dashboard');

require __DIR__.'/auth.php';

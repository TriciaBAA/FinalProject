<?php
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Protected Routes (Require Authentication)
Route::middleware('auth')->group(function () {
    // Profile route
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    // Gallery route
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

    // Booking route
    Route::get('/booking', [BookingController::class, 'index'])->name('booking');

});

// Default Route (Dashboard/Homepage)
Route::get('/', [DashboardController::class, 'show'])->name('dashboard');

// Authentication Routes (login, register, etc.)
Auth::routes();

// If you want a custom home route, you can set it here after authentication
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

//for testing tailwind
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [DashboardController::class, 'show']);

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');

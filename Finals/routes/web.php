<?php
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;

//for testing tailwind
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [GalleryController::class, 'show']);
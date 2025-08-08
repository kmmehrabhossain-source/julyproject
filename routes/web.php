<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\DocumentaryController;
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

    // Song routes
    Route::post('/songs', [SongController::class, 'store'])->name('songs.store');
    Route::get('/songs', [SongController::class, 'index'])->name('songs.index');

    // Documentary routes
    Route::post('/documentaries', [DocumentaryController::class, 'store'])->name('documentaries.store');
    Route::get('/documentaries', [DocumentaryController::class, 'index'])->name('documentaries.index');

    // Activity routes
    Route::get('/activities', [ActivityController::class, 'index'])->name('activities.index');
});

require __DIR__.'/auth.php';

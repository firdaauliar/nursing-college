<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.index');
})->name('home');

Route::get('/laboratory-schedule', function() {
    return view('landing.labSchedule');
})->name('labSchedule');

Route::get('/berita', [PostController::class, 'articles'])->name('berita');

Route::get('/admin', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('posts/createSlug', [PostController::class, 'checkSlug'])->middleware('auth')->name('posts.checkSlug');
    Route::resource('posts', PostController::class)->except(['show']);
});

require __DIR__.'/auth.php';

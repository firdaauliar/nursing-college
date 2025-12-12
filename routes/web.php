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

Route::get('/basic-nursing-laboratory', function() {
    return view('landing.basicNursingLab');
})->name('basicLab');

Route::get('/medical-surgical-nursing-laboratory', function() {
    return view('landing.medicalSurgicalLab');
})->name('medicSurgicalLab');

Route::get('/pediatric-nursing-laboratory', function() {
    return view('landing.pediatricLab');
})->name('pediatricLab');

Route::get('/maternity-nursing-laboratory', function() {
    return view('landing.maternityLab');
})->name('maternityLab');

Route::get('/psychiatric-nursing-laboratory', function() {
    return view('landing.psychiatricLab');
})->name('psychriaticLab');

Route::get('/critical-emergency-nursing-laboratory', function() {
    return view('landing.criticalEmergencyLab');
})->name('criticalEmergencyLab');

Route::get('/family-gerontics-community-laboratory', function() {
    return view('landing.familyGeronticsComLab');
})->name('familyGeronticsComLab');

Route::get('/loan-form', function(){
    return view('landing.loanForm');
})->name('loanForm');

Route::get('/practicum-module', function(){
    return view('landing.modulePracticum');
})->name('modulePracticum');


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

Route::get('/download/{filename}', function($filename){
    return Storage::disk('public')->download('files/Modul Praktikum/'.$filename);
})->name('downloadModul');

require __DIR__.'/auth.php';

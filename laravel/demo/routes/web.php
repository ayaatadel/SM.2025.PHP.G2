<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TrackController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Test as MiddlewareTest;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth')->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
Route::resource('students', StudentController::class);
Route::resource('tracks', TrackController::class)->middleware(MiddlewareTest::class);


Route::middleware('auth')->group(function () {
    Route::get('/students', [StudentController::class, 'index'])->name('student.index');
});

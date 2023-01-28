<?php

use App\Http\Controllers\articleController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

Route::controller(articleController::class) -> group(function () {
    Route::get('/article-upload', 'index')->name('article-upload');
    Route::post('/article-upload', 'store')->name('upload-article');
});

Route::controller(galleryController::class) -> group(function () {
    Route::get('/gallery-upload', 'index')->name('gallery-upload');
    Route::post('/gallery-upload', 'store')->name('upload-gallery');
});

Route::controller(studentController::class) -> group(function () {
    Route::get('/student-upload', 'index')->name('student-upload');
    Route::post('/student-upload', 'store')->name('upload-student');
    Route::get('/student', 'show')->name('student');
});

require __DIR__.'/auth.php';

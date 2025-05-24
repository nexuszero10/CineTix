<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// user yang belum login teetap bisa akses
Route::get('/', [MovieController::class, 'index'])->name('CineTix.homepage');
Route::get('/movies', [MovieController::class, 'movies'])->name('CineTix.movies');
Route::get('/movie/detail/{id}', [MovieController::class, 'detail'])->name('CineTix.movie-detail');

Route::get('/movies/category/{category_name}', [MovieController::class, 'category'])->name('CineTix.movies-category');
Route::get('/movies/genre/{genre_name', [MovieController::class, 'genre'])->name('CineTix.movies-genre');
Route::get('/movies/serach/{keyword}', [MovieController::class], 'serach_keyword')->name(('CineTix.movies-serach'));

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SnackController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'verified')->group(function () {
    Route::post('/movie/book', [MovieController::class, 'selectSeats'])->name('CineTix.movie-booking');
    Route::post('/movie/snack', [MovieController::class, 'selectFoods'])->name('CineTix.movie-snacks');
    Route::post('/movie/order', [MovieController::class, 'orderSummary'])->name('CineTix.order-summary');
    Route::post('/movies/checkout', [OrderController::class, 'createTransaction'])->name('CineTix.order-movie');
    Route::post('/movie/review', [ReviewController::class, 'addReview'])->name('CineTix.add-review');
    Route::get('/dashboard', [OrderController::class, 'showOrders'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// user yang belum login teetap bisa akses
Route::get('/', [MovieController::class, 'index'])->name('CineTix.homepage');
Route::get('/movies', [MovieController::class, 'movies'])->name('CineTix.movies');
Route::get('/snacks', [SnackController::class, 'index'])->name('CineTix.snacks');
Route::get('/promotions', [PromotionController::class, 'index'])->name('CineTix.promotions');
Route::get('/news', [NewsController::class, 'index'])->name('CineTix.news');
Route::get('/movie/detail/{id}', [MovieController::class, 'detail'])->name('CineTix.movie-detail');


Route::get('/movies/category/{category_name}', [MovieController::class, 'category'])->name('CineTix.movies-category');
Route::get('/movies/genre/{genre_name', [MovieController::class, 'genre'])->name('CineTix.movies-genre');
Route::get('/movies/serach/{keyword}', [MovieController::class], 'serach_keyword')->name(('CineTix.movies-serach'));

require __DIR__ . '/auth.php';

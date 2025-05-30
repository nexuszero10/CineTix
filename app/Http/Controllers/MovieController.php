<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\News;
use App\Models\Patner;
use App\Models\Schedule;
use App\Models\Snack;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    // halaman homepage
    public function index()
    {
        $tren_movies = Movie::with('category', 'genres')->whereBetween(('id'), [5, 9])->get();
        $inter_movies = Movie::whereBetween(('id'), [12, 17])->get();
        $horror_movies = Movie::whereBetween(('id'), [36, 41])->get();
        $drama_movies = Movie::whereBetween(('id'), [27, 32])->get();
        $action_movies = Movie::whereBetween(('id'), [47, 52])->get();
        $comedy_movies = Movie::whereBetween(('id'), [18, 23])->get();

        $hot_news = News::wherebetween(('id'), [1, 3])->get();
        $any_news = News::wherebetween(('id'), [4, 7])->get();

        $patners = Patner::all();

        return view('CineTix.homepage', [
            'tren_movies' => $tren_movies,
            'inter_movies' => $inter_movies,
            'horror_movies' => $horror_movies,
            'drama_movies' => $drama_movies,
            'action_movies' => $action_movies,
            'comedy_movies' => $comedy_movies,
            'hot_news' => $hot_news,
            'any_news' => $any_news,
            'patners' => $patners,
        ]);
    }

    // halaman list film 
    public function movies(Request $request)
    {
        $trending_movies = Movie::with('category', 'genres')->whereBetween(('id'), [1, 8])->get();
        $inter_movies = Movie::with('category', 'genres')->whereBetween(('id'), [9, 17])->get();
        $comedy_movies = Movie::with('category', 'genres')->whereBetween(('id'), [18, 26])->get();
        $drama_movies = Movie::with('category', 'genres')->whereBetween(('id'), [27, 35])->get();
        $horror_movies = Movie::with('category', 'genres')->whereBetween(('id'), [36, 46])->get();
        $action_movies = Movie::with('category', 'genres')->whereBetween(('id'), [47, 52])->get();

        // return $trending_movies ;
        return view('CineTix.movies', [
            'trending_movies' => $trending_movies,
            'inter_movies' => $inter_movies,
            'comedy_movies' => $comedy_movies,
            'drama_movies' => $drama_movies,
            'horror_movies' => $horror_movies,
            'action_movies' => $action_movies,
        ]);
    }

    public function detail($movie_id)
    {
        $movie_detail = Movie::with('category', 'genres', 'schedules.studio', 'reviews')->findOrFail($movie_id);
        return view('CineTix.detail-movie', ['movie' => $movie_detail]);
    }

    public function category()
    {
        // ambil data film berdasrkan kategori ? kalau tidak ada default ytinggal di list

    }

    public function genre()
    {
        // ambil data film berdasarkan genre 
    }

    public function selectSeats(Request $request)
    {
        // data dari modal jumlah kursi
        $userId = $request->input('inputUserId');
        $movieId = $request->input('inputFilmId');
        $scheduleId = $request->input('inputScheduleId');
        $number_of_seat = $request->input('inputJumlahSeat');

        // data ke view pilih kursi
        $user = User::findOrFail($userId);
        $movie = Movie::with('schedules.studio')->findOrFail($movieId);
        $selected_seats = Ticket::where('schedule_id', $scheduleId)
            ->get()
            ->map(function ($ticket) {
                return $ticket->row_seat . $ticket->row_number;
            });

        return view('CineTix.book-movie', [
            'user' => $user,
            'movie' => $movie,
            'number_of_seats' => $number_of_seat,
            'selected_seats' => $selected_seats,
        ]);
    }

    public function selectFoods(Request $request)
    {
        // data dari halaman pilih bangku
        $scheduleId = $request->input('inputScheduleId');
        $movieId = $request->input('inputMovieId');
        $numberOfSeats = $request->input('inputNumberOfSeats');
        $selectedSeats = $request->input('inputSelectedSeats');
        $subTotal = $request->input('inputSubTotal');

        // data ke view pilih snacks
        $schedule = Schedule::with('studio')->findOrFail($scheduleId);
        $movie = Movie::findOrFail($movieId);
        $foods = Snack::where('category', 'food')->orderBy('price', 'asc')->get();
        $drinks = Snack::where('category', 'drink')->orderBy('price', 'asc')->get();

        return $request->all() ;
        return view('CineTix.food-movie', [
            'scheduleId' => $schedule,
            'movie' => $movie,
            'numberOfSeats' => $numberOfSeats,
            'selectedSeats' => $selectedSeats,
            'subTotal' => $subTotal,
            'foods' => $foods,
            'drinks' => $drinks,
        ]);
    }

    public function orderSummary() {}
}

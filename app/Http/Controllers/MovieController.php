<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\News;
use App\Models\Patner;
use App\Models\Promotion;
use App\Models\Schedule;
use App\Models\Snack;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class MovieController extends Controller
{
    // halaman homepage
    public function index()
    {
        $hot_movies = Movie::with('category', 'genres')->whereBetween(('id'), [1, 5])->get();
        $more_movies = Movie::all()->where('id', '>', 5);
        $hot_news = News::wherebetween(('id'), [1, 3])->get();
        $any_news = News::all()->where('id', '>', 4);

        $patners = Patner::all();

        return view('CineTix.homepage', [
            'hot_movies' => $hot_movies,
            'more_movies' => $more_movies, 
            'hot_news' => $hot_news,
            'any_news' => $any_news,
            'patners' => $patners,
        ]);
    }

    // halaman list film 
    public function movies()
    {
        $nowShowing = Movie::whereHas('timeline', function ($query) {
            $query->where('status', 'now_showing');
        })->with('category', 'genres', 'timeline')->get();

        $comingSoon = Movie::whereHas('timeline', function ($query) {
            $query->where('status', 'coming_soon');
        })->with('category', 'genres', 'timeline')->get();

        return view('CineTix.movies', [
            'nowShowing' => $nowShowing,
            'comingSoon' => $comingSoon,
        ]);
    }

    public function detail($movie_id)
    {
        $movie_detail = Movie::with(['category', 'genres', 'schedules.studio', 'reviews.user', 'timeline'])
            ->findOrFail($movie_id);

        // cek apakah user login saat ini sudah pernah beli film ini
        $countOrdered = 0;
        if (Auth::check()) {
            $countOrdered = Order::where('user_id', Auth::id())
                ->whereHas('schedule', function ($query) use ($movie_id) {
                    $query->where('movie_id', $movie_id);
                })
                ->count();
        }

        // cek apakah movie ini punya komentar
        $comments = null;
        if ($movie_detail->reviews->isNotEmpty()) {
            $comments = $movie_detail->reviews;
        }

        return view('CineTix.detail-movie', [
            'movie' => $movie_detail,
            'countOrdered' => $countOrdered,
            'comments' => $comments // hanya dikirim jika ada
        ]);
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
            ->whereHas('order', function ($query) {
                $query->where('status', 'paid');
            })
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

    public function orderSummary(Request $request)
    {
        // data snack dari halaman pilih snacks
        $snackIds = $request->input('inputSnackIds', []);
        $snackQuantities = $request->input('inputSnackQuantities', []);

        $selectedSnacks = [];
        foreach ($snackIds as $index => $id) {
            $quantity = $snackQuantities[$index] ?? 0;
            $selectedSnacks[] = [
                'id' => $id,
                'quantity' => $quantity,
            ];
        }

        $detailSelectedSnacks = [];
        foreach ($selectedSnacks as $snack) {
            $snackModel = Snack::findOrFail($snack['id']);
            $snackModel->quantity = $snack['quantity'];
            $detailSelectedSnacks[] = $snackModel;
        }

        // data ke view order summary
        $movie = Movie::findOrFail($request->input('inputMovieId'));
        $schdule = Schedule::with('studio')->findOrFail($request->input('inputScheduleId'));
        $numberOfSeats = $request->input('inputNumberOfSeats');
        $selectedSeats = $request->input('inputSelectedSeats');
        $subTotalFinal = $request->input('inputSubTotal');
        $promotions = Promotion::all();

        return view('CineTix.order-summary', [
            'movie' => $movie,
            'schedule' => $schdule,
            'numberOfSeats' => $numberOfSeats,
            'selectedSeats' => $selectedSeats,
            'detailSelectedSnacks' => $detailSelectedSnacks,
            'subTotalFinal' => $subTotalFinal,
            'promotions' => $promotions,
        ]);
    }
}

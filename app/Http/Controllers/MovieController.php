<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\News;
use App\Models\Patner;
use Illuminate\Http\Request;

class MovieController extends Controller{   
    // halaman homepage
    public function index(){
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
    public function movies(Request $request){
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

    public function detail($movie_id){
        $movie_detail = Movie::with('category', 'genres', 'schedules.studio', 'reviews')->findOrFail($movie_id);
        return view('CineTix.detail-movie', ['movie' => $movie_detail]);
    }

    public function category()
    {
        // ambil data film berdasrkan kategori ? kalau tidak ada default ytinggal di list

    }

    public function genre(){
        // ambil data film berdasarkan genre 
    }
}

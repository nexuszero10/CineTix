<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        // ambil data buat blider

        // film sedang tren
        
        // kategoori film -> luar negeri, drama, series, horror
        return view('CineTix.homepage');
    }

    public function category(){
        // ambil data film berdasrkan kategori ? kalau tidak ada default ytinggal di list

    }

    public function detail(){
        // ambil data per film

        // ambil data jadwal film -> kalau ada (bukan coming soon)

        // ambil data review jiika ada
    }
}

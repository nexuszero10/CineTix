<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $main_news = News::all()->whereBetween('id', [1, 4]);
        $more_news = News::all()->where('id', '>', 4);
        return view('CineTix.news', [
            'main_news' => $main_news,
            'more_news' => $more_news,
        ]);
    }

    public function detail($newsId){
        $news_item = News::all()->findOrFail($newsId);
        return view('CineTix.detail-news', [
            'news' => $news_item,
        ]);
    }
}

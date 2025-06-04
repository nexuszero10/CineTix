<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function addReview(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'movie_id' => 'required|exists:movies,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
        ]);

        Review::create([
            'user_id' => $request->user_id,
            'movie_id' => $request->movie_id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return redirect()->route('CineTix.movie-detail', ['id' => $request->movie_id])
            ->with('success', 'Review berhasil ditambahkan.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Snack;
use Illuminate\Http\Request;

class SnackController extends Controller
{
    public function index(){
        $foods = Snack::all()->where('category', 'food');
        $drinks = Snack::all()->where('category', 'drink');

        return view('CineTix.snacks', [
            'foods' => $foods,
            'drinks' => $drinks,
        ]);
    }
}

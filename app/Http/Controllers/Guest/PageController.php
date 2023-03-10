<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index (){

        return view('home');
    }

    public function about(){

        return view('about');

    }

    public function film(){

        $movies = Movie::all();

        //dd($movies);

        return view('film', compact('movies'));
    }
}

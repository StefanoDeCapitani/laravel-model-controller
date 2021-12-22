<?php

namespace App\Http\Controllers;
use App\Movie;

use Illuminate\Http\Request;

class Movies extends Controller
{
    static function index(){
        $movies = Movie::all();
        return view("movies.index", ["movies" => $movies]);
    }
}

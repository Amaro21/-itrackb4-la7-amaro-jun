<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = [
            ['title' => 'Spiderman', 'genre' => 'Action', 'rating' => '5 stars'],
            ['title' => 'Batman', 'genre' => 'Action', 'rating' => '5 stars'],
            ['title' => 'Tarzan', 'genre' => 'Action', 'rating' => '5 stars'],
            ['title' => 'The Flash', 'genre' => 'Action', 'rating' => '5 stars'],
            ['title' => 'Antman', 'genre' => 'Action', 'rating' => '5 stars']
        ];
        return view('movies.index', ['movies' => $movies]);
    }
}

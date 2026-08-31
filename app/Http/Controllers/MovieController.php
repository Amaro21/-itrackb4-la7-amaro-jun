<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class MovieController extends Controller
{
    public function index()
    {
        return view('movies.index', ['movies' => $this->movies()]);
    }

    public function show($id)
    {
        $movies =$this->movies();

        if(!isset($movies[$id]))
            {
                abort(404);
            }
            return view('movies.show', ['movie' => $movies[$id]]);
    }

    public function featured()
    {
        $movies = $this->movies();

        $featured = $movies[5];

        return view('movies.featured', ['movie' => $featured]);
    }

    public function filter($genre = null)
    {
        $movies = $this->movies();
        $filtered = [];

        foreach ($movies as $id => $movie) {

            if ($genre == null || $movie['genre'] == $genre) {
                $filtered[$id] = $movie;
            }
        }
        return view('movies.filter', ['movies' => $filtered,'genre' => $genre]);
    }

    private function movies()
    {
        return [
            1 => ['id' => 1, 'title' => 'Spiderman', 'genre' => 'Action', 'rating' => '5 stars', 'year' => '2001'],
            2 => ['id' => 2, 'title' => 'Batman', 'genre' => 'Action', 'rating' => '5 stars', 'year' => '2003'],
            3 => ['id' => 3, 'title' => 'Tarzan', 'genre' => 'Adventure', 'rating' => '5 stars', 'year' => '2000'],
            4 => ['id' => 4, 'title' => 'The Flash', 'genre' => 'Action', 'rating' => '5 stars', 'year' => '2010'],
            5 => ['id' => 5, 'title' => 'Antman', 'genre' => 'Sci-Fi', 'rating' => '5 stars', 'year' => '2017'],
            6 => ['id' => 6, 'title' => 'Superman', 'genre' => 'Action', 'rating' => '5 stars', 'year' => '2005']
        ];
    }
}

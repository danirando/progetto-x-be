<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function popular()
    {
        $response = Http::get("https://api.themoviedb.org/3/movie/popular", [
            'api_key'  => env('TMDB_API_KEY'),
            'language' => 'it-IT'
        ]);

        return $response->json();
    }

    public function search($query)
    {
        $response = Http::get("https://api.themoviedb.org/3/search/movie", [
            'api_key'  => env('TMDB_API_KEY'),
            'language' => 'it-IT',
            'query'    => $query
        ]);

        return $response->json();
    }

    public function details($id)
    {
        $response = Http::get("https://api.themoviedb.org/3/movie/{$id}", [
            'api_key'            => env('TMDB_API_KEY'),
            'language'           => 'it-IT',
            'append_to_response' => 'credits,videos,similar,images,release_dates' 
        ]);

        return $response->json();
    }
}

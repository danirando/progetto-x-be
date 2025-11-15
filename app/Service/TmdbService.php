<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TmdbService
{
    private $baseUrl;
    private $apiKey;

    public function __construct()
    {
        $this->baseUrl = config('services.tmdb.base_url');
        $this->apiKey  = config('services.tmdb.api_key');
    }

    public function getPopularMovies()
    {
        return Http::get($this->baseUrl . '/movie/popular', [
            'api_key' => $this->apiKey,
            'language' => 'it-IT'
        ])->json();
    }

    public function searchMovie($query)
    {
        return Http::get($this->baseUrl . '/search/movie', [
            'api_key' => $this->apiKey,
            'language' => 'it-IT',
            'query' => $query
        ])->json();
    }
}

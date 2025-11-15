<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MovieController;

Route::get('/movies/popular', [MovieController::class, 'popular']);
Route::get('/movies/search/{query}', [MovieController::class, 'search']);


Route::get('/', function () {
    return view('welcome');
});
 
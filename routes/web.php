<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PageController::class,'index'])->name('home');
Route::get('/i-migliori-film',[PageController::class,'bestMovies'])->name('bestmovies');
Route::get('/i-peggiori-film',[PageController::class,'worseMovies'])->name('worsemovies');
Route::get('/dettagli-film/{id}',[PageController::class,'movieDetails'])->name('moviedetails');






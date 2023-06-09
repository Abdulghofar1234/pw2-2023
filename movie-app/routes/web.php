<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/', [HomeController::class, 'index']);
// Movies

Route::resource('/movies', MovieController::class);

// Genres

Route::resource('/genres', GenreController::class);

// Reviews
Route::resource('/reviews', ReviewController::class);


Route::get('/users', function () {
    return view('users');
});
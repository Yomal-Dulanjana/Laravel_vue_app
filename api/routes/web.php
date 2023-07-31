<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;

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
//Home Controller
Route::get('/', [HomeController::class, "index"]) ->name('home');

//book Controller
Route::prefix('/book')->group(function (){
    Route::get('/', [BookController::class, "index"]) ->name('book');
    Route::post('/store', [BookController::class, "index"]) ->name('book');
    Route::get('/book', [BookController::class, "index"]) ->name('book');
    Route::get('/book', [BookController::class, "index"]) ->name('book');
});


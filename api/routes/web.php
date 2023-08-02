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
    Route::post('/store', [BookController::class, "store"]) ->name('book-store');
    Route::get('/{book_id}/show', [BookController::class, "edit"]) ->name('show');
    Route::put('/{book_id}/update', [BookController::class, "update"]) ->name('book-update');
    Route::get('/{book_id}/delete', [BookController::class, "delete"]) ->name('book-delete');
    Route::get('/{book_id}/type', [BookController::class, "type"]) ->name('book-type');
});



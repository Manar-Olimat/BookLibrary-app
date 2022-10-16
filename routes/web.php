<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// new route => new controller method => new view 

//all books
Route::get('/',[BooksController::class ,'index']);

//show add book
Route::get('/books/create',[BooksController::class ,'create']);

//store books data

Route::post('/books',[BooksController::class ,'store']);


//show single book

Route::get('/books/{book}',[BooksController::class ,'show']);

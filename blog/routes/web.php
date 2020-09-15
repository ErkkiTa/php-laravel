<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
     $books = App\Models\Book::where('language', 'Estonian')->get();
    // $books = DB::table('books')->where ('language', 'Estonian')->get();
    return view('welcome',['books' => $books]);
    
});

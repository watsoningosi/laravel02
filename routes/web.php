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
$article = App\Models\Article::paginate(2);
$article = App\Models\Article::all();
$article = App\Models\Article::latest()->get();
*/

Route::get('/', function () {

    return view('welcome', [

        'articles' => App\Models\Article::take(3)->latest()->get()

    ]);
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/single', function () {
    return view('single');
});

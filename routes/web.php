<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
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

        'articles' => App\Models\Article::take(5)->latest()->get(),
        'article' => App\Models\Article::all()

    ]);
});

Route::get('\single', function () {
    return view('\single');
});

Route::get('single', 'App\Http\Controllers\ArticlesController@index');

Route::get('contact', 'App\Http\Controllers\ContactController@index');

Route::post('/contact', 'App\Http\Controllers\ContactController@store');

Route::get('/contact', 'App\Http\Controllers\ContactController@create');

Route::post('/articles', 'App\Http\Controllers\ArticlesController@store');

Route::get('/articles/create', 'App\Http\Controllers\ArticlesController@create');

Route::get('/articles/{article}/edit', 'App\Http\Controllers\ArticlesController@edit');

Route::get('/articles/{article}', 'App\Http\Controllers\ArticlesController@show');

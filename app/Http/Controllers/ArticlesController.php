<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles = Article::latest()->get();

        return view('single', ['articles' => $articles]);
    }
    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }
    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        //  dd('hello'); 
        // dump (request()->all());  
        $article = new Article();

        $article->title = request('title');
        $article->exerpt = request('exerpt');
        $article->body = request('body');
        $article->save();

        return redirect('single');
    }
}

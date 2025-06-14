<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(6); // أو العدد الذي يناسب التصميم
        return view('articles.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('articles.show', compact('article'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $articles = Article::latest()->paginate(10);
    return view('admin.articles.index', compact('articles'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'slug' => 'required|string|unique:articles,slug',
        'image' => 'nullable|image',
        'published_at' => 'required|date',
    ]);

    $data = $request->only(['title', 'slug', 'category', 'excerpt', 'content', 'published_at']);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('articles', 'public');
    }

    Article::create($data);

    return redirect()->route('admin.articles.index')->with('success', 'تمت إضافة المقالة بنجاح');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'slug' => 'required|string|unique:articles,slug,' . $article->id,
        'image' => 'nullable|image',
        'published_at' => 'required|date',
    ]);

    $data = $request->only(['title', 'slug', 'category', 'excerpt', 'content', 'published_at']);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('articles', 'public');
    }

    $article->update($data);

    return redirect()->route('admin.articles.index')->with('success', 'تم تحديث المقالة بنجاح');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

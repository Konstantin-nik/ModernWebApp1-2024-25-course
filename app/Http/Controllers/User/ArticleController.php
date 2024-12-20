<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();

        return view("user.articles.index", compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("user.articles.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
            "title"=> ["required", "string", "min:5", "max:255"],
            "content"=> ["required", "string"],
        ]);

        $article = Article::create([
            "title"=> $request->title,
            "content"=> $request->content,
            "author_id"=> 1,
        ]);

        session()->flash("success","Article $article->title created successfully");

        return redirect()->route("user.articles.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::findOrFail($id);

        return view("user.articles.show", compact("article"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::find($id);

        return view("user.articles.edit", compact("article"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request-> validate([
            "title"=> ["required", "string", "min:5", "max:255"],
            "content"=> ["required", "string"],
        ]);

        $article = Article::find($id);
        $article->update($request->all(['title', 'content']));

        return redirect(route('user.articles.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::findOrFail($id);  
        $article->delete();

        session()->flash('success',"Article $article->title was deleted");

        return redirect()->route('user.articles.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::published()->orderByDesc("published_at")->paginate(10);

        return view("articles.index")->with("articles", $articles);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::published()->where("id", $id)->first();

        if ($article === null) {
            abort(404);
        }

        return view('articles.show')->with('article', $article);
    }
}

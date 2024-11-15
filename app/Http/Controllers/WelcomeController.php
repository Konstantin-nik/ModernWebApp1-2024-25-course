<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Article;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $colors = ['coral', 'darkturquoise', 'hotpink', 'lightgreen'];
        $articles = Article::published()->get()->sortByDesc('published_at');
        $comments = Comment::all()->sortByDesc('created_at');

        return view('welcome', [
            'articles' => $articles,
            'colors' => $colors,
            'comments'=> $comments,
        ]);
    }
}

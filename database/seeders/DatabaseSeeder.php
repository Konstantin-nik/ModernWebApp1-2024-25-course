<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use App\Models\Article;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory(10)->create();
        Article::factory(10)->create();
        Category::factory(4)->create();
        Comment::factory(10)->create();

        foreach(Article::all() as $article) {
            $list_of_categories = Category::inRandomOrder()->take(random_int(0,4))->get();

            $article->categories()->attach($list_of_categories);
        }

    }
}

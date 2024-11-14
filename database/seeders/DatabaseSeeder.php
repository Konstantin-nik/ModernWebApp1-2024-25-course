<?php

namespace Database\Seeders;

use App\Models\Category;
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

        Article::factory(10)->create();
        Category::factory(4)->create();

        foreach(Article::all() as $article) {
            $list_of_categories = Category::inRandomOrder()->take(random_int(0,4))->get();

            $article->catogories()->saveMany($list_of_categories);
        }

        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

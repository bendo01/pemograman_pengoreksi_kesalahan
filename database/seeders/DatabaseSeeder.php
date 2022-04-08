<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseSeeder extends Seeder
{
    use RefreshDatabase;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(100)->create();
        // \App\Models\User::factory(100)->has(Post::factory()->count(3))
        \App\Models\User::factory(100)->has(
            Post::factory()->count(3)->has(
                Comment::factory()->count(3)
            )
        )->create();
    }
}

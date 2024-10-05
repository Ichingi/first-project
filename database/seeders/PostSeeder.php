<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::unguard();
        for($i = 0; $i <= 100; $i++){
            Post::query()->create([
                'title' => Str::random(rand(10, 50)),
                'content' => Str::random(rand(100, 999))
            ]);
        }
        Post::reguard();
    }
}

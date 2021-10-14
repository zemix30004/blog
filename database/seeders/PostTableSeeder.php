<?php

namespace Database\Seeders;

use App\Models\Post;

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // создать 50 постов блога
        Post::factory()->count(50)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Comment;

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // создать 200 комментариев
        Comment::factory()->count(200)->create();
    }
}

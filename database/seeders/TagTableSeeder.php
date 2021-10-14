<?php

namespace Database\Seeders;

use App\Models\Tag;

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // создать 100 тегов блога
        Tag::factory()->count(50)->create();
    }
}

<?php

namespace Database\Factories;

use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }

    public function run(Faker $faker)
    {
        $name = $faker->realText(rand(70, 100));
        return [
            'user_id' => rand(1, 10),
            'category_id' => rand(1, 12),
            'name' => $name,
            'excerpt' => $faker->realText(rand(300, 400)),
            'content' => $faker->realText(rand(400, 500)),
            'slug' => Str::slug($name),
            'published_by' => rand(1, 10),
        ];
    }
}

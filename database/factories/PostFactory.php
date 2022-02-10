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
        return [
            'author_id' => rand(1, 4),
            'title' => $faker->realText(rand(25, 30)),
            'excerpt' => $faker->realText(rand(100, 120)),
            'body' => $faker->realText(rand(200, 300)),
            'created_at' => $faker->dateTimeBetween('-60 days', '-30 days'),
            'updated_at' => $faker->dateTimeBetween('-20 days', '-1 days'),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Comment;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    protected $model = Comment::class;

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
            'post_id' => rand(1, 50),
            'user_id' => rand(1, 10),
            'content' => $faker->realText(rand(200, 500)),
            'created_at' => $faker->dateTimeBetween('-200 days', '-50 days'),
            'updated_at' => $faker->dateTimeBetween('-40 days', '-1 days'),
            'published_by' => rand(1, 3), // супер-админ или просто админ
        ];
    }
}

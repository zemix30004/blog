<?php

namespace Database\Factories;

use App\Models\Tag;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    protected $model = Tag::class;

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
        $name = $faker->realText(rand(20, 30));
        return [
            'name' => $name,
            'slug' => Str::slug($name),
        ];
    }
}

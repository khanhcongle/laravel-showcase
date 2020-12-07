<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            Post::$SLUG => $this->faker->slug(),
            Post::$CATEGORY_ID => random_int(1, 3),
            Post::$CONTENT => $this->faker->paragraph(10, true),
            Post::$IS_FEATURED => false,
            Post::$IS_PUBLISHED => $this->faker->boolean,
            Post::$TITLE => $this->faker->text(40),
            Post::$USER_ID => random_int(1, 20),
        ];
    }
}

<?php

namespace Database\Factories;
use App\Models\Model;
use App\Models\Post;
//use App\Models\User;

use App\Models\Comment;
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
            'post_id' => Post::all()->random()->id,
            //'name' => $this->faker->name(),
           // 'title' => $this->faker->sentence(),
            'ucomment' => $this->faker->paragraph(2),
        ];
    }
}

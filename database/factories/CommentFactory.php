<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content'=>$this->faker->paragraph(),
            'user_id'=>rand(1,2),
            'post_id'=>rand(1,20)
            
        ];
    }
}

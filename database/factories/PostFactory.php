<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->bothify($string = '## ??'),
            'post_text' => $this->faker->text(),
            'user_id' => $this->faker->numberBetween($min = 1, $max = 10)
        ];
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

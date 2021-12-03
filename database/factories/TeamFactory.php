<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'owner_id' => $this->faker->numberBetween($min = 0, $max = 50),
            'top_id' => $this->faker->numberBetween($min = 0, $max = 50),
            'jungle_id' => $this->faker->numberBetween($min = 0, $max = 50),
            'mid_id' => $this->faker->numberBetween($min = 0, $max = 50),
            'adc_id' => $this->faker->numberBetween($min = 0, $max = 50),
            'support_id' => $this->faker->numberBetween($min = 0, $max = 50)
        ];
    }
        public function user()
        {
            return $this->belongsTo(User::class);
        }
}

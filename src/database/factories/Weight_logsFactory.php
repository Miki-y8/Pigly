<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Weight_logsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'user_id' => WeightTarget::inRandomOrder()->first()->id,
        'date' => $this->faker->date(),
        'weight' => $this->faker->randomNumber(),
        'calories' => $this->faker->randomNumber(),
        'exercise_time' => $this->faker->randomNumber(),
        'exercise_content' => $this->faker->word(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Exam ' . rand(1, 40),
            'subject_id' => rand(1, 5),
            'date' => $this->faker->date(),
            'time' => $this->faker->time()
        ];
    }
}

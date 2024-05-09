<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\attendance>
 */
class attendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => fake()->randomElement([138]),
            'class_id' => fake()->randomElement([135,159,144,140,151]),
            'date' => fake()->date(),
            'is_present'=> fake()->boolean(),
            'reason' => fake()->sentence(),
        ];
    }
}

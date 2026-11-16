<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => rtrim(fake()->realText(fake()->numberBetween(30, 60)), '.'),
            'description' => fake()->realText(fake()->numberBetween(80, 160)),
            'long_description' => fake()->realText(fake()->numberBetween(400, 1500)),
            'completed' => fake()->boolean,
        ];
    }

    /**
     * Indicate that the model's long description should be empty.
     */
    public function emptyLongDescription(): static
    {
        return $this->state(fn (array $attributes) => [
            'long_description' => null,
        ]);
    }
}

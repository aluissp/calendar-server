<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'title' => $this->faker->unique()->sentence(),
            'notes' => $this->faker->text(),
            'start' => $this->faker->date('Y-m-d H:i:s'),
            'end' => $this->faker->date('Y-m-d H:i:s'),
        ];
    }
}

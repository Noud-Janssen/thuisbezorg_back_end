<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "subject"=>fake()->sentence(5),
            "sender_name"=>fake()->name(),
            "text"=>fake()->sentence(5),
            "email"=>fake()->safeEmail()
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'firstname'=> $this->faker->name(),
            'lastname'=>$this->faker->name(),
            'email'=>$this->faker->safeEmail(),
            'message'=>$this->faker->sentence(10),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ApartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'user_id' => $this->faker->unique()->numberBetween(1, \App\Models\User::count()),
            'user_id' => function() {
                return factory(App\Models\User::class)->create()->id;
            },
            'name' => $this->faker->text(30),
            'province' => $this->faker->city,
            'address' => $this->faker->text(30),
        ];
    }
}

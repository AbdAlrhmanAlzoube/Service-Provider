<?php

namespace Database\Factories;

use App\Models\ServiceReservation;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceReservation>
 */
class ServiceReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ServiceReservation::class;

    public function definition()
    {
        return [
            'type' => $this->faker->word,
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'address' => $this->faker->address,
            'picture' => $this->faker->imageUrl(),
            'price' => $this->faker->numberBetween(1,1000),
        ];
    }
}

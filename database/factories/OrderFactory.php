<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\ServiceReservation;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\rder>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Order::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'service_reservation_id' => ServiceReservation::factory(),
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'delivery_date' => $this->faker->date(),
            'additional_details' => $this->faker->paragraph,
        ];
    }
}

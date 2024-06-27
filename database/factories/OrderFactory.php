<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\Order;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'tracking_number' => $this->faker->word(),
            'delivery_date' => $this->faker->date(),
            'delivery_time' => $this->faker->word(),
            'customer_id' => Customer::factory(),
        ];
    }
}

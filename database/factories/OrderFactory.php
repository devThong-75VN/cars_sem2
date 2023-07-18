<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status=array('pending','finished');
        array_rand($status);

        return [
            'name'=>$this->faker->name(),
            'description'=>$this->faker->realtext(),
            'status'=>$status[0],
            'receiver'=>$this->faker->name(),
            'user_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}

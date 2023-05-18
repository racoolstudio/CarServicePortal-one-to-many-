<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Owner;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
use Faker\Factory as FakerFactory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create();

        return [
            'car_name' => $faker->word(),
            'car_model' => $faker->randomElement(['SUV', 'sedan', 'hatchback','RVA']),
            'owner_id' => $this->factoryForModel(Owner::class)->create()->id,

            ];
    }
}

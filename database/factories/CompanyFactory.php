<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $funding = $this->faker->numberBetween(1000, 2000000000);
        $funding_encode = encode_bigNumber($funding);
        return [
            'companyName' => $this->faker->company,
            'companyAddress' => $this->faker->address(),
            'founded' => $this->faker->date(),
            'total_funding' => $funding_encode,
            'total_funding_decode' => $funding,
            'description' => $this->faker->paragraph,
            'valuation' => $this->faker->randomFloat(2, 0, 10000000000),
            'status' => $this->faker->randomElement([0,1])
        ];
    }
}

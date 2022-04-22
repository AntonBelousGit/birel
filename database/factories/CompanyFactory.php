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
        return [
            'companyName' => $this->faker->company,
            'companyAddress' => $this->faker->address(),
            'founded' => $this->faker->date(),
            'total_funding' => $this->faker->randomElement(['1200','850M','1.5B']),
            'description' => $this->faker->paragraph,
            'valuation' => $this->faker->randomFloat(2, 0, 10000),
            'status' => $this->faker->randomElement([0,1])
        ];
    }
}

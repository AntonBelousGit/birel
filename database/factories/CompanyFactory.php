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
            'description' => $this->faker->paragraph,
            'valuation' => $this->faker->randomFloat(2, 0, 10000),
            'status' => 1
        ];
    }
}

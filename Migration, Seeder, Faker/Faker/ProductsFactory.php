<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
class ProductsFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name'=>$this->faker->word,
            'description'=>$this->faker->sentence,
            'quantity'=>$this->faker->numberBetween(10, 100),
            'price'=>$this->faker->randomFloat(2,1000,10000),
            'category_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $weights = [1, 250, 500, 750];
        return [
            'sub_category_id' => function(){
                return SubCategory::inRandomOrder()->first('id');
            },
            'name' => $this->faker->word(),
            'title' => $this->faker->text(15),
            'weight' => $this->faker->randomElement($weights),
            'new_price' => $this->faker->numberBetween(100, 900),
            'stock'   => $this->faker->numberBetween(0,50),
            'status'   => 'active',
        ];
    }
}

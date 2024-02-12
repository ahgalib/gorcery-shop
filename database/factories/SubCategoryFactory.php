<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubCategory>
 */
class SubCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = SubCategory::class;
    public function definition(): array
    {
        return [
            'category_id' => function(){
                return Category::inRandomOrder()->first('id');
            },
            'name' => $this->faker->word(),
        ];
    }
}

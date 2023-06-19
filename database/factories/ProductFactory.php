<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->realText(rand(40, 50));
        return [
            'category_id' => rand(1, 4),
            'brand_id' => rand(1, 4),
            'article' => $this->faker->realText(rand(10, 20)),
            'name' => $name,
            'description' => $this->faker->realText(rand(400, 500)),
            'slug' => Str::slug($name),
            'price' => rand(10000, 2000),
        ];
    }
}

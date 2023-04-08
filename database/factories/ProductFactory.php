<?php

namespace Database\Factories;

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
    public function definition()
    {
        $name = $this->faker->unique()->word();
        $slug = \Str::slug($name, '-');
        return [
            'category_id' => $this->faker->randomElement([ 1, 2,3,4,5]),
            'name' => $name,
            'slug' => $slug,
            'description' => $this->faker->paragraph(),
            'content' => $this->faker->text(),
            'price' => $this->faker->numberBetween(10000, 1000000),
            'sku' => $this->faker->unique()->isbn10(),
            'featured' => 1,
        ];
    }
}

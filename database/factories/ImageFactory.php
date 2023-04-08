<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $product_id = $this->faker->randomElement([ 1, 2,3,4,5]);
        return [
            'product_id' => $product_id,
            'path' => "product-" . $product_id . '.'. $this->faker->randomElement([ 1, 2,3,4,5]),
        ];
    }
}

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
    public function definition(): array
    {
        return [
            "source" => $this->faker->image("public/storage/items/products", 640, 520, null,  $fullPath = false),
            "item_id" => $this->faker->numberBetween(1,10),
        ];
    }
}

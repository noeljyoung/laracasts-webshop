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
            'path' => $this->faker->unique()->randomElement([
                'images/product1.jpg',
                'images/product2.jpg',
                'images/product3.jpg',
                'images/product4.jpg',
                'images/product5.jpg',
                'images/product6.jpg',
                'images/product7.jpg',
                'images/product8.jpg',
                'images/product9.jpg',
                'images/product10.jpg',
                'images/product11.jpg',
                'images/product12.jpg',
            ]),
        ];
    }
}

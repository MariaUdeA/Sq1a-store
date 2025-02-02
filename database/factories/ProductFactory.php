<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use FakerCommerce\Faker\FakerFactory;


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
        $fakerStore = FakerFactory::create();
        $name = $fakerStore->name();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'brand' => fake()->domainWord(),
            'description' => fake()->sentence(),
            'price' => fake()->randomFloat(2, 10, 1000),
            'sale_price' => fake()->boolean() ? fake()->randomFloat(2, 10, 1000) : null,
            'images' => $this->getRandomImages($name),
            'rating' => fake()->numberBetween(1, 5),
            'review_count' => fake()->numberBetween(1, 100),
            'other_attributes' => ["material" => $this->faker->randomElement(['Silk','Wool', 'Linen', 'Cashmere', 'Cotton']),
                "brand" => $this->faker->randomElement(['Gucci','Prada', 'Louis Vuitton', 'Denim', 'Versace'])],


        ];
    }

    function getRandomImages($name, $min = 1, $max = 10):array {
        $count = rand($min, $max);
        $images = [];

        for ($i = 0; $i < $count; $i++) {
            $images[] = 'https://imageplaceholder.net/700x900?text='.Str::slug($name);
        }
        return $images;
    }
}

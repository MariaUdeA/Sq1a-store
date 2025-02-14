<?php

namespace Database\Factories;

use App\Models\ProductVariant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use FakerCommerce\Faker\FakerFactory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    private function generateUniqueSlug($slug) {
        $originalSlug = $slug;
        $i = 1;
        while (\DB::table('products')->where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $i++;
        }
        return $slug;
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fakerStore = FakerFactory::create();
        $name = $fakerStore->name();
        $slug = $this->generateUniqueSlug($name);
        $price = fake()->randomFloat(2, 10, 1000);
        $sale = fake()->boolean();
        $sale_price = $sale ? fake()->randomFloat(2, 10, $price-1) : null;
        return [
            'name' => $name,
            'slug' => Str::slug($slug),
            'brand' => fake()->domainWord(),
            'description' => fake()->sentence(),
            'price' => $price,
            'sale_price' => $sale_price,
            'real_price' => $sale ? $sale_price : $price,
            'sale_date' => $sale ? now()->addHour(rand(1,50)) : null,
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

    public function withVariants($count = 1)
    {
        return $this->has(ProductVariant::factory()->count($count), 'variants');
    }
}

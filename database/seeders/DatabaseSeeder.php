<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\User;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //Let's start with one user first
        try {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        $categoryNames = [
            "men's clothing",
            "women's clothing",
            "watches",
            "jewelry",
            "electronics",
            'discounts'
        ];

        foreach ($categoryNames as $categoryName) {
            try {
                Category::factory()->create([
                    'name' => $categoryName,
                    'slug' => Str::slug($categoryName),
                    'description' => fake()->paragraph,
                ]);
            } catch (Exception $e) {
                dd($e->getMessage());
            }
        }
        $categories = Category::all()->pluck('id')->toArray();

        //Special product
        try {// Let's create a special product
            $test_prod = Product::create([
                'name' => 'Wool and Cashemere Top',
                'slug' => Str::slug('Sweater'),
                'brand' => 'Gucci',
                'description' => 'Wool and Cashmere Top',
                'price' => 2030,
                'sale_price' => 1600,
                'real_price' => 2000,
                'sale_date' => now()->addHours(2),
                'images' => [
                    asset('images/test-product/cashmere3.avif'),
                    asset('images/test-product/cashmere2.avif'),
                    asset('images/test-product/cashmere1.jpg'),
                    asset('images/test-product/cashmere4.avif'),
                    asset('images/test-product/cashmere5.avif'),
                    asset('images/test-product/cashmere6.webp'),
                    asset('images/test-product/cashmere7.avif'),],
                'rating' => 5,
                'review_count' => 7,
                'other_attributes' => null
            ]);
            foreach (['#FF6C6C', '#FF7629', '#FFF06C'] as $color) {
                foreach (['XS', 'S', 'M', 'L', 'XL'] as $size) {
                    ProductVariant::create([
                            'product_id' => $test_prod->id,
                            'color' => $color,
                            "size" => $size,
                            "stock_quantity" => fake()->numberBetween(0, 4),
                        ]
                    );
                }
            }
            $test_prod->categories()->attach(
                fake()->randomElements($categories, rand(1, count($categories)))
            );
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        //General product creation
        foreach (range(1, 24) as $i) {
            try {
                $product = Product::factory()->withVariants(4)->create();

                $product->categories()->attach(
                    fake()->randomElements($categories, rand(1, count($categories)))
                );
            } catch (Exception $e) {
                dd($e->getMessage());
            }
        }


    }


    /**
     *  Seed the application's database.
     * /
     * public function run(): void
     * {
     * //First, we create the shopping cart that creates users since it is one to one
     * ShoppingCart::factory(50)->create();
     * //We create new users
     * User::factory(100)->create();
     * //Creating products table
     * Product::factory(50)->create();
     * //this one creates variants so we do it first
     * CartItem::factory(100)->create();
     * //add some more
     * ProductVariant::factory(50)->create();
     * //Create orders
     * Order::factory(200)->create();
     * //creating order items
     * OrderItem::factory(300)->create();
     * }
     **/
}

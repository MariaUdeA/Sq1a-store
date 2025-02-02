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

        foreach (range(1, 10) as $i) {
            try {
                $product = Product::factory()->create();

                $product->categories()->attach(
                    fake()->randomElements($categories, rand(1, count($categories)))
                );
            } catch (Exception $e) {
                dd($e->getMessage());
            }
        }

        try {
            ProductVariant::factory(50)->create();
        } catch (Exception $e) {
            dd($e->getMessage());
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

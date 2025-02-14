<?php

namespace App\Livewire\Store;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Redirect;
use Livewire\Attributes\On;
use Livewire\Component;

class Filters extends Component
{
    public $priceSelected;
    public $sizeSelected;
    public $colorSelected;
    public $selectedCategory;
    public $brandSelected;


    public $colorCounts;
    public $brandCounts;
    public $categories;


    public function clearFilters(){
        return redirect()->route('store');
    }

    public function changeFilter($size=null,$price=null, $brand=null, $color=null, $category=null){
        // Set the size to the selected value or the previously selected size
        $size = $size ?? $this->sizeSelected;
        $price = $price ?? $this->priceSelected;
        $brand = $brand ?? $this->brandSelected;
        $color = $color ?? $this->colorSelected;
        $category = $category ?? $this->selectedCategory;

        // Get the current query parameters
        $queryParams = request()->query();

        $queryParams['size'] = $size;
        $queryParams['price'] = $price;
        $queryParams['brand'] = $brand;
        $queryParams['color'] = $color;
        $queryParams['category'] = $category;

        // Redirect with the merged query parameters, preserving pagination state
        return redirect()->route('store', $queryParams);
    }


    public function mount(){
        //get categories
        $firstsCategories = Category::where('slug', '!=', 'discounts')->take(5)->get();
        $discountCategory = Category::where('slug', 'discounts')->first();

        $this->categories = $firstsCategories->merge([$discountCategory]);

        //get colors
        $colors=ProductVariant::pluck('color')->toArray();
        $this->colorCounts = array_count_values($colors); // Count the occurrences of each color
        arsort($this->colorCounts); // Sort by occurrence, highest first
        $this->colorCounts = array_slice($this->colorCounts, 0, 8, true); // The 'true' preserves the keys


        //get brands
        $brands=Product::pluck('brand')->toArray();
        $this->brandCounts = array_count_values($brands);
        arsort($this->brandCounts);
        $this->brandCounts = array_slice($this->brandCounts, 0, 8, true); // The 'true' preserves the keys


    }
    public function render()
    {
        return view('livewire.store.filters',[
            'colorCounts' => $this->colorCounts,
            'brandCounts' => $this->brandCounts,
            'categories' => $this->categories,
        ]);
    }
}

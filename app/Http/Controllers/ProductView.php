<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class ProductView extends Controller
{
    public function __invoke($id):View
    {
        //this one can be null
        //for the image null view
        $selectedVariant = ProductVariant::find($id);
        $product = Product::find($selectedVariant->product_id);
        return view('pages.product', [
            'selectedVariant' => $selectedVariant,
            'product' => $product
        ]);
    }
}

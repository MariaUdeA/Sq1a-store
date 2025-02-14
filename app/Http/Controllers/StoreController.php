<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;


class StoreController extends Controller
{
    public function __invoke(Request $request):View
    {
        $size  = null;
        $price = null;
        $brand = null;
        $category = null;
        $color = null;
        $name = null;

        if($request->has("price")) {
            $price=$request->input('price');
        }
        if($request->has("size")) {
            $size=$request->input('size');
        }
        if($request->has("brand")) {
            $brand=$request->input('brand');
        }
        if($request->has("category")) {
            $category=$request->input('category');
        }
        if($request->has("color")) {
            $color=$request->input('color');
        }

        if($request->has("name")) {
            $name=$request->input('name');
        }

        return view('pages.store', [
            'size' => $size,
            'price' => $price,
            'brand' => $brand,
            'category' => $category,
            'color' => $color,
            'name' => $name,
        ]);
    }
}

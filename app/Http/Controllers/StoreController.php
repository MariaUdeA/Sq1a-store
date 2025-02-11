<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;


class StoreController extends Controller
{

    public function __invoke():View
    {
        // Fetch products from the API
        $request=Request::create('/api/products','GET');
        //This is for auth stuff, keeping it here just in case
        //$request->headers->set('Authorization','Bearer'.'your_user_token');

        $response = Route::dispatch($request);
        $response_body=json_decode($response->getContent(),true);

        if ($response->isSuccessful()) {
            $products = $response_body['data'];
            //dd($products);
        } else {
            // Handle the error (e.g., show a message if the API fails)
            $products = [];
        }
        return view('pages.store', [
            'categories' => $products
        ]);
    }
}

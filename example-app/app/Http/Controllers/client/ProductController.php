<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product; // Import the Product model

class ProductController extends Controller
{
    public function products()
    {
        // Fetch all products from the database
        $products = Product::all();
        
        // Return the view with products data
        return view('layout.client.products', ['products' => $products]);
    }
}

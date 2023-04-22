<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::where('inventory', '>', 0)->filter()->search()->paginate(10);

        return view('products', compact('products'));
    }


    public function show(Product $product)
    {
        return view('single-product', compact('product'));
    }
}

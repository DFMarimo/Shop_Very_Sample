<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(15);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:8'],
            'price' => ['required', 'integer'],
            'inventory' => ['required', 'integer'],
            'discount' => ['required', 'integer'],
            'image' => ['required', 'mimes:jpg,jpeg,png']
        ]);

        $fileName = upload($request->image->getClientOriginalName());

        $request->image->move(public_path('/img/'), $fileName);

        Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'inventory' => $request->inventory,
            'discount' => $request->discount,
            'image' => $fileName
        ]);

        return redirect(route('products.index'));
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:8'],
            'price' => ['required', 'integer'],
            'inventory' => ['required', 'integer'],
            'discount' => ['required', 'integer'],
        ]);

        $fileName = $product->image;

        if ($request->image) {
            $request->validate([
                'image' => ['required', 'mimes:jpg,png,jpeg'],
            ]);

            $fileName = upload($request->image->getClientOriginalName());

            $request->image->move(public_path('/img/'), $fileName);
        }

        $product->update([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'inventory' => $request->inventory,
            'discount' => $request->discount,
            'image' => $fileName
        ]);

        return redirect(route('products.index'));
    }

    public function destroy(Product $product)
    {
        /* Delete Or Soft Delete*/
        try {
            $product->delete();
            return redirect()->route('products.index');
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    // Function create
    public function create()
    { 
        return view('products.create'); 
    }

    // Function store
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'nullable'
        ]);

        Product::create($data); // No need to assign to a variable if not used
 
        return redirect()->route('product.index'); // Use method chaining for clarity
    }

    // Function edit
    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]); // Corrected view path
    }

    
    // Function update
    // public function update(product $product, Request $request)
    // {
    //     $data = $request->validate([
    //         'name' => 'required',
    //         'qty' => 'required|numeric',
    //         'price' => 'required|numeric',
    //         'description' => 'nullable'
    //     ]);

    //     Product::update($data); // No need to assign to a variable if not used

    //     return redirect()->route('product.index'); // Use method chaining for clarity
    // }
}

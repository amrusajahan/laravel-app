<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use GuzzleHttp\Psr7\Response;

class ProductController extends Controller
{
    public function index()
    {

        return view('Products.index', [
            'products' => Product::all()
        ]);
    }

    public function create()
    {
        return view('Products.create');
    }

    public function store(SaveProductRequest $request)
    {
        $product = Product::create($request->validated());

        return redirect()->route('products.show', $product)->with('status', $product->name . ' is created successfully');
    }

    public function show(Product $product)
    {
        return view('Products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('Products.edit', compact('product'));
    }

    public function update(SaveProductRequest $request, Product $product)
    {
        $product->update($request->validated());

        return redirect()->route('products.show', $product);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('status', 'Product is deleted successfully');
    }
}

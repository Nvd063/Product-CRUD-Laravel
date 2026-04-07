<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProduct;
use App\Http\Requests\UpdateProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('pages.index', compact('products'));
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(StoreProduct $request)
    {
        // dd($request->all());
        
        Product::create($request->validated());

        return redirect()->route('products.index')->with('success', 'Product Added Successfully');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('pages.edit', compact('product'));
    }

    public function update(UpdateProduct $item, Product $product)
    {
        $ValidProduct = $item->validated();
        $product->update($ValidProduct);
        return redirect()->route('products.index')->with('success', 'Product Updated');
    }

    public function destroy(Request $request, $id)
    {
        $item = Product::findOrFail($id);
        $item->delete();
        return redirect()->route('products.index')->with('Success', 'Product Deleted');
    }

}

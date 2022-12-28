<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|max:255',
            'ean' => 'required|unique:products,ean,'.$product->id.'|max:13',
            'short_description' => 'required|max:255',
            'long_description' => 'required',
            'image' => 'nullable|image|max:1500',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:pending,validated,rejected'
        ]);

        $product->name = $request->name;
        $product->ean = $request->ean;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->category_id = $request->category_id;
        $product->status = $request->status;

        if ($request->hasFile('image')) {
            $currentImage = $product->image;
            if ($currentImage) {
                Storage::delete('public/'.$currentImage);
            }
            $image = $request->file('image');
            $path = $image->store('products', 'public');
            $product->image = $path;
        }

        $product->save();

        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}

<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }
    
    public function userIndex()
    {
        $userId = Auth::id();
        $products = Product::where('user_id', $userId)->get();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $categories = Category::all();

        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {

        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'ean' => 'required|string|max:255|unique:products',
                'short_description' => 'required|string|max:255',
                'long_description' => 'required|string',
                // 'image_url' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'category_id' => 'required|exists:categories,id',
                'status' => 'required|in:En attente de validation,Rejeté,Validé',
            ]);

            $product = new Product();
            $product->name = $request->input('name');
            $product->ean = $request->input('ean');
            $product->short_description = $request->input('short_description');
            $product->long_description = $request->input('long_description');
            $product->category_id = $request->input('category_id');
            $product->status = $request->input('status');
            $product->user_id = Auth::id();

            $product->save();

            return redirect('products');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $produit
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $products = Product::find($id);
        return view('products.show')->with('products', $products);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();

        $products = Product::find($id);

        return view('products.edit', compact('categories'), compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Product  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        $input = $request->all();
        $products->update($input);
        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $produit
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('products');
    }
}

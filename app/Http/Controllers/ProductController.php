<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $products = Product::all();

    //     return view('products.index', compact('products'));
    // }

    // public function userIndex()
    public function index()
    {
        $userId = Auth::id();

        // if(Auth::user()->hasRole('admin')) {
        //     $products = Product::orderBy('id','DESC')->with('user')->paginate(10);
        // } else {

        $products = Product::where('user_id', '=', $userId)->orderBy('id', 'DESC')->get();

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
        // Validate the data
        $request->validate([
            'name' => 'required|string|max:255',
            'ean' => 'required|string|max:255|unique:products',
            'short_description' => 'required|string|max:255',
            'long_description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:En attente de validation,Rejeté,Validé',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        // Store in the database
        $product = new Product;
        $product->name = $request->name;
        $product->ean = $request->ean;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->category_id = $request->category_id;
        $product->status = $request->status;
        $product->user_id = Auth::id();

        // Handle the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);

            $product->image = $location;
        }


        $product->save();
        return redirect()->route('products.show', $product->id);

        // } catch (\Throwable $th) {
        //     throw $th;
        // }
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
        return view('products.show', compact('products'));
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
        $request->validate([
            'name' => 'required|string|max:255',
            'ean' => 'required|string|max:255|unique:products',
            'short_description' => 'required|string|max:255',
            'long_description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg,gif|max:5048',
            'status' => 'required|in:En attente de validation,Rejeté,Validé',
        ]);

        //$image_path = $request->file('image')->store('app/public/image');

        // Store in the database
        //$product = $request->all();
        $product = Product::find($id);
        $product->name = $request->input('name');
        // $product->ean = $request->ean;
        $product->short_description = $request->input('short_description');
        $product->long_description = $request->input('long_description');
        $product->category_id = $request->category_id;
        // $product->status = $request->status;
        $product->user_id = Auth::id();

        if ($request->hasFile('image')) {
            // Add the new image
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);
            $oldFilename = $product->image;

            // Update the database
            $product->image = $location;

            // Delete the old image
            Storage::delete($oldFilename);
        }

        $product->save();

        return redirect()->route('products.index', $product->id);

        // return redirect()->back()->with('status', 'Product add successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $produit
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        $product = Product::find($id);
        Storage::delete($product->image);
        $product->delete();
        return redirect()->route('products.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\AttributCategory;
use App\Models\Category;
use Attribute;
use Illuminate\Http\Request;

class AttributCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('attributcategory.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttributCategory  $attributCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $attributes = AttributCategory::find($id);
        return view('attributes.show')->with('attributes', $attributes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttributCategory  $attributCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $input = $request->all();
        AttributCategory::create($input);
        return redirect('attributcatebory')->with('flash_message', 'attributes Addedd to category!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AttributCategory  $attributCategory
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $attributcategory = AttributCategory::find($id);
        return view('attributcategory.show')->with('attributcategory', $attributcategory);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttributCategory  $attributCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AttributCategory::destroy($id);
        return redirect('attributes')->with('flash_message', 'Attributes deleted!');
    }
}

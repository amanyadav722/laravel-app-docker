<?php

namespace App\Http\Controllers;

use App\Models\AttributeProduct;
use App\Http\Requests\StoreAttributeProductRequest;
use App\Http\Requests\UpdateAttributeProductRequest;

class AttributeProductController extends Controller
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
     * @param  \App\Http\Requests\StoreAttributeProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttributeProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttributeProduct  $attributeProduct
     * @return \Illuminate\Http\Response
     */
    public function show(AttributeProduct $attributeProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttributeProduct  $attributeProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(AttributeProduct $attributeProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttributeProductRequest  $request
     * @param  \App\Models\AttributeProduct  $attributeProduct
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttributeProductRequest $request, AttributeProduct $attributeProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttributeProduct  $attributeProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttributeProduct $attributeProduct)
    {
        //
    }
}

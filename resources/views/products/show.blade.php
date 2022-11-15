
@extends('layout')
@section('content')
<br>
<div class="m-15">
    <button class="btn btn-primary ml-20"><a href="{{ url('/products/') }}" class="link-light">Retour</a></button>
   </div>
   <br>
<div class="card">
  <div class="card-header">Produit : {{ $product->name}}</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $product->name }}</h5>
        <p class="card-text">EAN : {{ $product->ean }}</p>
        <p class="card-text">Image 1 : {{ $product->image_1 }}</p>
        <p class="card-text">Image 2 : {{ $product->image_2 }}</p>
        <p class="card-text">Image 3 : {{ $product->image_3 }}</p>
        <p class="card-text">Image 4 : {{ $product->image_4 }}</p>
        <p class="card-text">Image 5 : {{ $product->image_5 }}</p>
  </div>
      
    </hr>
  
  </div>
</div>
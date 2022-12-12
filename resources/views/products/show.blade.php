
@extends('layout')
@section('content')
<br>
<div class="m-15">
    <button class="btn btn-primary ml-20"><a href="{{ url('/products/') }}" class="link-light">Retour</a></button>
   </div>
   <br>
<div class="card">
  <div class="card-header">Produit : {{ $products->name}}</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $products->name }}</h5>
        <p class="card-text">EAN : {{ $products->ean }}</p>
        <p class="card-text">Image 1 : {{ $products->image_1 }}</p>
        <p class="card-text">Image 2 : {{ $products->image_2 }}</p>
        <p class="card-text">Image 3 : {{ $products->image_3 }}</p>
        <p class="card-text">Image 4 : {{ $products->image_4 }}</p>
        <p class="card-text">Image 5 : {{ $products->image_5 }}</p>
  </div>
      
    </hr>
  
  </div>
</div>
@endsection

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
  </div>
      
    </hr>
  
  </div>
</div>
@endsection
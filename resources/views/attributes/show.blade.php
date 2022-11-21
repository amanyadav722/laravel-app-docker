
@extends('layout')
@section('content')
<br>
<div class="m-15">
    <button class="btn btn-primary ml-20"><a href="{{ url('/attributes/') }}" class="link-light">Retour</a></button>
   </div>
   <br>
<div class="card">
  <div class="card-header">Attribute: {{ $attributes->name}}</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $attributes->name }}</h5>
        <p class="card-text">Type : {{ $attributes->ean }}</p>
        <p class="card-text">valeur_listeattributes : {{ $attributes->image_1 }}</p>Type
  </div>
      
    </hr>
  
  </div>
</div>
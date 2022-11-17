
@extends('layout')
@section('content')
<br>
<div class="m-15">
    <button class="btn btn-primary ml-20"><a href="{{ url('/categories/') }}" class="link-light">Retour</a></button>
   </div>
   <br>
<div class="card">
  <div class="card-header">Catégorie : {{ $categories->name}}</div>
    <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Nom : {{ $categories->name }}</h5>
        <p class="card-text">parent : {{ $categories->parent }}</p>
        </div>  
    </hr>
    </div>
</div>
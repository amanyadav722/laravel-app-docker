
@extends('layout')
@section('content')
<br>
<div class="m-15">
    <button class="btn btn-primary ml-20"><a href="{{ url('/partners/') }}" class="link-light">Retour</a></button>
   </div>
   <br>
<div class="card">
  <div class="card-header">Partenaire : {{ $partners->name}}</div>
    <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $partners->name }}</h5>
        <p class="card-text">E-mail : {{ $partners->mail }}</p>
        <p class="card-text">Numéro de téléphone : {{ $partners->phone }}</p>
        </div>  
    </hr>
    </div>
</div>

@extends('layout')
@section('content')
<br>
<div class="m-15 -ml-30">
    <button class="btn btn-primary ml-20"><a href="{{ url('/users/') }}" class="link-light">Retour</a></button>
   </div>
   <br>
<div class="card container">
  <div class="card-header">Utilisateur : {{ $users->name}}</div>
  <div class="card-body">
  
        <div class="card-body ">
        <h5 class="card-title">Nom : {{ $users->name }}</h5>
        <p class="card-text">E-mail : {{ $users->email }}</p>
        <p class="card-text">Rôle : {{ $users->role }}</p>
  </div>
      
    </hr>
  
  </div>
</div>

@endsection
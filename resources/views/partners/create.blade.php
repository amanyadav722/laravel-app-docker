@extends('layout')
@section('content')
<br>
<div class="m-15">
 <button class="btn btn-primary mb-20"><a href="{{ url('/categories/') }}" class="link-light">Retour</a></button>
</div>
<br>
  
<div class="card">
  <div class="card-header">Créer une catégorie</div>
  <div class="card-body">

      <form action="{{ url('partners') }}" method="post">
        {!! csrf_field() !!}
        <label>Nom de la catégorie</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>E-mail</label></br>
        <input type="email" name="mail" id="mail" class="form-control"></br>
    </form>
  
  </div>
</div>
@stop
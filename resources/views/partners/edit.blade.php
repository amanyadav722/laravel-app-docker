@extends('layout')
@section('content')
<br>
<div class="m-15">
 <button class="btn btn-primary mb-20"><a href="{{ url('/partners/') }}" class="link-light">Retour</a></button>
</div>
<br>

<div class="card">
  <div class="card-header">Modifier le partenaire</div>
  <div class="card-body">
      
      <form action="{{ url('partners/' .$partners->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$partners->id}}" id="id" />
        <label>Nom</label></br>
        <input type="text" name="name" id="name" value="{{$partners->name}}" class="form-control"></br>
        <label> E-mail</label></br>
        <input type="email" name="mail" id="mail" value="{{$partners->email}}" class="form-control"></br>
        <label> Numéro de téléphone</label></br>
        <input type="text" name="phone" id="phone" value="{{$partners->phone}}" class="form-control"></br>
        <input type="submit" value="Mettre à jour" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
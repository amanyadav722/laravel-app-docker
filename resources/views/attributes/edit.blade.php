@extends('layout')
@section('content')
<br>
<div class="m-15">
 <button class="btn btn-primary mb-20"><a href="{{ url('/attributes/') }}" class="link-light">Retour</a></button>
</div>
<br>

<div class="card">
  <div class="card-header">Modifier le produit</div>
  <div class="card-body">
      
      <form action="{{ url('attributes/' .$attributes->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$attributes->id}}" id="id" />
        <label>Nom</label></br>
        <input type="text" name="name" id="name" value="{{$attributes->name}}" class="form-control"></br>
        <label>Type</label></br>
        <input type="text" name="type" id="type" value="{{$attributes->type
        }}" class="form-control"></br>
        <label>Valeur Liste</label></br>
        <input type="text" name="valeur_liste" id="valeur_liste" value="{{$attributes->valeur_liste}}" class="form-control"></br>
        <input type="submit" value="Mettre à jour" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
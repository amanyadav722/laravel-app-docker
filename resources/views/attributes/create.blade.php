@extends('layout')
@section('content')
<br>
<div class="m-15">
 <button class="btn btn-primary mb-20"><a href="{{ url('/attributes/') }}" class="link-light">Retour</a></button>
</div>
<br>
  
<div class="card">
  <div class="card-header">Créer un attribut</div>
  <div class="card-body">

      <form action="{{ url('attributes') }}" method="post">
        {!! csrf_field() !!}
        <label>Nom de l'attribut</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Type</label></br>
        <input type="text" name="type" id="type" class="form-control"></br>
        <label>valeur_liste</label></br>
        <input type="text" name="valeur_liste" id="valeur_liste" class="form-control"></br>
        <input type="submit" value="Ajouter" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
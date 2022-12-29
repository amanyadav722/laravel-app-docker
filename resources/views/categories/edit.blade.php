@extends('layout')
@section('content')
<br>
<div class="m-15">
 <button class="btn btn-primary mb-20"><a href="{{ url('/categories/') }}" class="link-light">Retour</a></button>
</div>
<br>

<div class="card">
  <div class="card-header">Modifier la catégorie</div>
  <div class="card-body">
      
      <form action="{{ url('categories/' .$categories->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$categories->id}}" id="id" />
        <label>Nom de la catégorie</label></br>
        <input type="text" name="name" id="name" value="{{$categories->name}}" class="form-control"></br>
        <input type="submit" value="Mettre à jour" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
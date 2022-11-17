@extends('layout')
@section('content')
<br>
<div class="m-15">
 <button class="btn btn-primary mb-20"><a href="{{ url('/categories/') }}" class="link-light">Retour</a></button>
</div>
<br>
  
<div class="card">
  <div class="card-header">Créer un partenaire</div>
    <div class="card-body">

      <form action="{{ url('partners') }}" method="post">
        {!! csrf_field() !!}
        <label>Nom de la catégorie</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>

        <select name="parent" id="parent">
          <option value="">Est-ce une catégorie parent</option>
          <option value="1">oui</option>
          <option value="0">non</option>
        </select></br></br>
        <input type="submit" value="Ajouter" class="btn btn-success"></br>
      </form>
    </div>
  </div>
</div>
@stop
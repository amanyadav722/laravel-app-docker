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
        <label>Nom du partenaire</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>E-mail</label></br>
        <input type="email" name="mail" id="mail" class="form-control"></br>
        <select id="role">
          <option value="">Est une catégorie parent</option>
          <option value="1">oui</option>
          <option value="0">non</option>
        </select>
        <input type="submit" value="Ajouter" class="btn btn-success"></br>
      </form>
    </div>
  </div>
</div>
@stop
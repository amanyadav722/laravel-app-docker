@extends('layout')
@section('content')
<br>
<form method="POST" action="{{ route('categories.store') }}">
  @csrf

  <div class="form-group">
    <label for="name">Nom de la catégorie</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Créer la catégorie</button>
</form>

@endsection
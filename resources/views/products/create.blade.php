@extends('layout')
@section('content')
<br>
<div class="m-15">
 <button class="btn btn-primary mb-20"><a href="{{ url('/products/') }}" class="link-light">Retour</a></button>
</div>
<br>
  
<div class="card">
  <div class="card-header">Créer un produit</div>
  <div class="card-body">

      <form action="{{ url('products') }}" method="post">
        {!! csrf_field() !!}
        <label>Nom produit</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Numéro EAN</label></br>
        <input type="text" name="ean" id="ean" class="form-control"></br>
        <label>Catégorie</label></br>
        <select name="category" id="category" class="form-control"></br>
          <option value="">Selectionnez une catégorie</option></br>

          @foreach ($categories as $category)

          <option value="{{$category->id}}">{{$category->name}}</option>
          
          @endforeach
        </select></br>
        <input type="file" name="file1" id="file1" class="form-control"></br>
        <label>Image 2</label></br>
        <input type="file" name="file2" id="file2" class="form-control"></br>
        <label>Image 3</label></br>
        <input type="file" name="file3" id="file3" class="form-control"></br>
        <label>Image 4</label></br>
        <input type="file" name="file4" id="file4" class="form-control"></br>
        <label>Image 5</label></br>
        <input type="file" name="file5" id="file5" class="form-control"></br>
        <input type="submit" value="Ajouter" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
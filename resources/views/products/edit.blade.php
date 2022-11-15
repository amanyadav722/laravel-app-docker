@extends('layout')
@section('content')
<br>
<div class="m-15">
 <button class="btn btn-primary mb-20"><a href="{{ url('/products/') }}" class="link-light">Retour</a></button>
</div>
<br>

<div class="card">
  <div class="card-header">Modifier le produit</div>
  <div class="card-body">
      
      <form action="{{ url('products/' .$product->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$product->id}}" id="id" />
        <label>Nom</label></br>
        <input type="text" name="name" id="name" value="{{$product->name}}" class="form-control"></br>
        <label> Numéro EAN</label></br>
        <input type="text" name="address" id="address" value="{{$product->ean}}" class="form-control"></br>
        <label>Image 1</label></br>
        <input type="file" name="file1" id="file1" value="{{$product->image_1}}" class="form-control"></br>
        <label>Image 2</label></br>
        <input type="file" name="file1" id="file1" value="{{$product->image_2}}" class="form-control"></br>
        <label>Image 3</label></br>
        <input type="file" name="file1" id="file1" value="{{$product->image_3}}" class="form-control"></br>
        <label>Image 4</label></br>
        <input type="file" name="file1" id="file1" value="{{$product->image_4}}" class="form-control"></br>
        <label>Image 5</label></br>
        <input type="file" name="file1" id="file1" value="{{$product->image_5}}" class="form-control"></br>
        <input type="submit" value="Mettre à jour" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
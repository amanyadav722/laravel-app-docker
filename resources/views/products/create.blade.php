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


          @foreach ($products->categories as $category)

          <option value="{{$category->id}}">{{$category->name}}</option>
          
          @endforeach
        </select></br>
        <label>Image 1</label></br>
        <input type="file" name="image_1" id="image_1" class="form-control"></br>
        <input type="submit" value="Ajouter" class="btn btn-success"></br> 
        {{-- <label>Image 2</label></br>
        <input type="file" name="product_image" id="product_image" class="form-control"></br>
        <label>Image 3</label></br>
        <input type="file" name="product_image" id="product_image" class="form-control"></br>
        <label>Image 4</label></br>
        <input type="file" name="product_image" id="product_image" class="form-control"></br>
        <label>Image 5</label></br>
        <input type="file" name="product_image" id="product_image" class="form-control"></br>--}}
    </form>
  
  </div>
</div>
@stop
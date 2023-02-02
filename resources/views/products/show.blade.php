@extends('layout')
@section('content')
    <br>
    <div class="m-15">
        <button class="btn btn-primary ml-20"><a href="{{ route('products.index') }}" class="link-light">Retour</a></button>
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            <h1>Produit : {{ $products->name }}</h1>
        </div>
        <div class="card-body">
            <h5 class="card-title">Name : {{ $products->name }}</h5>
            <p class="card-text">EAN : {{ $products->ean }}</p>
            <p class="card-text">short_description : {{ $products->short_description }}</p>
            <p class="card-text">long_description : {{ $products->long_description }}</p>
            {{-- <p class="card-text">image : {{ $products->image }}</p> --}}
            <p class="card-text">status : {{ $products->status }}</p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <img src="/images/{{ $products->image }}" width="300px">
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('products.edit', $products->id) }}" class="btn btn-primary">Edit</a>
        </div>
        <div class="col-md-6">
            <form action="{{ route('products.destroy', $products->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger float-right">Delete</button>
            </form>
        </div>
    </div>
@endsection

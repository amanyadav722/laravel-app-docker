@extends('layout')
@section('content')
    <br>
    <div class="m-15">
        <button class="btn btn-primary mb-20"><a href="{{ url('/products/') }}" class="link-light">Retour</a></button>
    </div>
    <br>
    <br>
    <form method="POST" action="{{ route('products.store') }}" class="needs-validation" novalidate>
        @csrf

        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
        <input type="hidden" name="id" id="id" value="{{ $products->id }}" id="id" />

        <div class="form-group">
            <label for="name">Nom du produit</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $products->name }}" required>
            <div class="invalid-feedback">
                Le nom du produit est requis
            </div>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="long_description">Description courte</label>
            <textarea class="form-control" id="description" name="description" value="{{ $products->short_description }}" required>{{ old('description') }}</textarea>
            <div class="invalid-feedback">
                La description courte est requise.
            </div>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="short_description">Description longue</label>
            <textarea class="form-control" id="description" name="description" value="{{ $products->long_description }}" required>{{ old('description') }}</textarea>
            <div class="invalid-feedback">
                La description longue est requise.
            </div>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="category_id">Catégorie</label>
            <select class="form-control" id="category_id" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="image_url">Image</label>
            <input type="file" class="form-control" id="image_url" name="image_url" value=""
                required>
            <div class="invalid-feedback">
                L'image est requise
            </div>
            @error('image_url')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        </br>
        <button type="submit" class="btn btn-primary">Ajouter le produit</button>
    </form>
@endsection

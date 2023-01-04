@extends('layout')
@section('content')
    <br>
    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf
    
        <div class="form-group">
            <label for="name">Nom du produit</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>
    
        <div class="form-group">
            <label for="ean">Numéro EAN</label>
            <input type="text" class="form-control" id="ean" name="ean" value="{{ old('ean') }}" required>
        </div>
    
        <div class="form-group">
            <label for="short_description">Description Courte</label>
            <input type="text" class="form-control" id="short_description" name="short_description" value="{{ old('short_description') }}" required>
        </div>
    
        <div class="form-group">
            <label for="long_description">Description longue</label>
            <textarea class="form-control" id="long_description" name="long_description" required>{{ old('long_description') }}</textarea>
        </div>
    
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
        </div>
    
        <div class="form-group">
            <label for="category_id">Catégorie</label>
            <select class="form-control" id="category_id" name="category_id" required>
                <option value=""></option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
    
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value=""></option>
                <option value="En attente de validation" {{ old('status') == 'En attente de validation' ? 'selected' : '' }}>En attente de validation</option>
                <option value="Validé" {{ old('status') == 'Validé' ? 'selected' : '' }}>Validé</option>
                <option value="Rejeté" {{ old('status') == 'Rejeté' ? 'selected' : '' }}>Rejeté</option>
            </select>
        </div>
    <br>
        <button type="submit" class="btn btn-primary">Créer le produit</button>
    </form>
@endsection

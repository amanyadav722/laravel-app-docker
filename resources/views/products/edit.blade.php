@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $products->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $products->name }}" class="form-control"
                        placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ean:</strong>
                    <input type="text" name="ean" value="{{ $products->ean }}" class="form-control"
                        placeholder="ean">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>short_description:</strong>
                    <textarea class="form-control" style="height:150px" name="short_description" placeholder="short_description">{{ $products->short_description }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>long_description:</strong>
                    <textarea class="form-control" style="height:150px" name="long_description" placeholder="long_description">{{ $products->long_description }}</textarea>
                </div>
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

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image"><br>
                    <img src="/images/{{ $products->image }}" width="300px">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    <select class="form-control" id="status" name="status" required>
                        <option value=""></option>
                        <option value="En attente de validation" {{ old('status') == 'En attente de validation' ? 'selected' : '' }}>En attente de validation</option>
                        <option value="Validé" {{ old('status') == 'Validé' ? 'selected' : '' }}>Validé</option>
                        <option value="Rejeté" {{ old('status') == 'Rejeté' ? 'selected' : '' }}>Rejeté</option>
                    </select>
                </div>
            </div><br>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection








{{--

@extends('layout')
@section('content')
    <h1>Edit product</h1>
    <br>
    <div class="m-15">
        <button class="btn btn-primary mb-20"><a href="{{ route('products.index') }}" class="link-light">Retour</a></button>
    </div>

    <br>
    <form action="{{ route('products.update', $products->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

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
            <label for="short_description">Description court</label>
            <textarea class="form-control" id="short_description" name="short_description" value="{{ $products->short_description }}" required>{{ old('short_description') }}</textarea>
            <div class="invalid-feedback">
                La description longue est requise.
            </div>
            @error('short_description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="long_description">Description longue</label>
            <textarea class="form-control" id="long_description" name="long_description" value="{{ $products->long_description }}" required>{{ old('long_description') }}</textarea>
            <div class="invalid-feedback">
                La description courte est requise.
            </div>
            @error('long_description')
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

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
                <img src="images/{{ $products->image }}" width="500px">
            </div>
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
--}}

{{-- <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image" value="" required>
            <img src="images/{{ $products->image }}" width="300px">
            <div class="invalid-feedback">
                L'image est requise
            </div>
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div><br> --}}
{{--
      <button type="submit" class="btn btn-primary">Ajouter le produit</button>
    </form>
@endsection --}}

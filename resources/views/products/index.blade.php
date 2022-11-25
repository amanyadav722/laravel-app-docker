@extends('layout')
@section('content')
<br>
<br>
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>PIM Habitat et Jardin</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/products/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i>Ajouter un nouveau produit
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom</th>
                                        <th>EAN</th>
                                        <th>Image 1</th>
                                        <th>Image 2</th>
                                        <th>Image 3</th>
                                        <th>Image 4</th>
                                        <th>Image 5</th>
                                        <th>Categorie</th>
                                        <th>Attribut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->ean }}</td>
                                        <td>Ligne</td>
                                        <td>Ligne</td>
                                        <td>{{ $item->image_1 }}</td>
                                        <td>{{ $item->image_2 }}</td>
                                        <td>{{ $item->image_3 }}</td>
                                        <td>{{ $item->image_4 }}</td>
                                        <td>{{ $item->image_5 }}</td>
                                        <td>
                                            <a href="{{ url('/products/' . $item->id) }}" title="Voir produit"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Afficher</button></a>
                                            <a href="{{ url('/products/' . $item->id . '/edit') }}" title="Editer Produit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>
                                            <form method="POST" action="{{ url('/products' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Voulez vous supprimer {{$item->name}} &quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
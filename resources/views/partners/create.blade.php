@extends('layout')

@section('content')
<div>
    <h1>Créer un partenaire</h1>
</div>

<form action="{{ route('partners.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="col-md-6 mb-3">
                <label for="name">Entrez le nom du partenaire</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label for="mail">Entrez l'email du partenaire</label>
                <input type="email" name="mail" id="mail" class="form-control" placeholder="mail@mail.com">
            </div>
            <div class="col-md-6 mb-3">
                <label for="phone">Entrez le numéro de téléphone du partenaire</label>
                <input type="text" name="phone" id="phone" class="form-control">
            </div>
            <div class="pull-right">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </div>
    </div>
</form>


@endsection
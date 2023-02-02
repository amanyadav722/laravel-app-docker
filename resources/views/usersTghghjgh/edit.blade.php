@extends('layout')
@section('content')
    <br>
    <div class="m-15">
        <button class="btn btn-primary mb-20"><a href="{{ url('/users/') }}" class="link-light">Retour</a></button>
    </div>
    <br>

    <div class="card">
        <div class="card-header">Modifier l'utilisateur</div>
        <div class="card-body">

            <form action="{{ route('users.update', $users->id) }}" method="post">
                {!! csrf_field() !!}
                @method('put')
                <input type="hidden" name="id" id="id" value="{{ $users->id }}" id="id" />
                <label>Nom</label>
                <input type="text" name="name" id="name" value="{{ $users->name }}" class="form-control"></br>
                <label>email</label>
                <input type="email" name="email" id="email" value="{{ $users->email }}" class="form-control"></br>
                <label>role</label>
                <input type="text" name="role" id="role" value="{{ $users->role }}" class="form-control"></br>
                <input type="submit" value="Mettre à jour" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@stop

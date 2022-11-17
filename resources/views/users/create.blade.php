@extends('layout')
@section('content')
<br>
<div class="m-15">
 <button class="btn btn-primary mb-20"><a href="{{ url('/users/') }}" class="link-light">Retour</a></button>
</div>
<br>
  
<div class="card">
  <div class="card-header">Créer un Utilisateur</div>
  <div class="card-body">

      <form action="{{ url('users') }}" method="post">
        {!! csrf_field() !!}
        <label>Nom de l'utilisateur</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>E-mail</label></br>
        <input type="email" name="mail" id="mail" class="form-control"></br>
        <label>Mot de passe</label></br>
        <input type="password" name="password" id="password" class="form-control"></br>
        <label>Rôle</label></br>
        <select id="role" class="form-control">
          <option value="">Veuillez selectionnez un rôle</option>
          <option value="admin">Admin</option>
          <option value="partner">partner</option>
          <option value="user">user</option>
      </select>
      <br>
      <br>
        <input type="submit" value="Ajouter" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
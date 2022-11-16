
@extends('layout')
    @section('content')
            <div class="px-4 py-5 my-5 text-center">
                <img class="d-block mx-auto mb-4" src="{{URL::asset('image/logo.png')}}" alt="" width="150" height="150">
                <h1 class="display-5 fw-bold">PIM Habitat et Jardin</h1>
                <div class="col-lg-6 mx-auto">
                  <p class="lead mb-4">Bienvenu sur la plateforme qui vous permettra de pouvoir mettre vos produits et pouvoir suivre les avancées.</p>
                  <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a class="btn btn-outline-secondary" href="#">Bientôt Disponible</a>
                  </div>
                </div>
              </div>
@endsection


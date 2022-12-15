<!DOCTYPE html>

<html>

<head>
    <title>PIM Habitat et Jardin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }} ">
</head>

<body>
    <header>
        <nav class="site-header sticky-top py-1 text-bg-dark p-3">
            <div class="container d-flex flex-column flex-md-row justify-content-between">
                <a class="py-2 d-none d-md-inline-block text-reset text-decoration-none"
                    href="{{ url('/') }}">Accueil</a>
                <a class="py-2 d-none d-md-inline-block text-reset text-decoration-none"
                    href="{{ url('/products') }}">Produits</a>

                @if (Route::has('login'))
                    @auth
                        <a class="py-2 d-none d-md-inline-block text-reset text-decoration-none"
                            href="{{ url('/categories') }}">Catégories</a>
                        <a class="py-2 d-none d-md-inline-block text-reset text-decoration-none"
                            href="{{ url('/users') }}">Utilisateurs</a>
                        <a class="py-2 d-none d-md-inline-block text-reset text-decoration-none"
                            href="{{ url('/attributes') }}">Attributs</a>
                        <a href="{{ url('/dashboard') }}"
                            class="py-2 d-none d-md-inline-block text-reset text-decoration-none">Tableau de Board</a>
                        <a href="{{ route('logout') }}""
                            class="py-2 d-none d-md-inline-block text-reset text-decoration-none"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Deconnexion</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="py-2 d-none d-md-inline-block text-reset text-decoration-none">Connexion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="py-2 d-none d-md-inline-block text-reset text-decoration-none">Inscription</a>
                        @endauth
                    @endif
                @endif

            </div>
        </nav>
    </header>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <div class="container position-static">
        @yield('content')
    </div>

    <div class="container">
        <footer class="py-3 my-4">
            <hr>
            <p class="text-center text-muted">© {{ date('Y') }} Habitat et Jardin</p>
        </footer>
    </div>

</body>

<script>
    < script src = "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity = "sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin = "anonymous" >
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
    integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
</script>

</html>

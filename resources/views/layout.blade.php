<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('title')


    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    @yield('link')

</head>

<body >


    <nav class="navbar navbar-light navbar-expand-lg" >
        <a class="navbar-brand testee" href="{{ url('/') }}">SLM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ">
                @include('partials.nav-item',['link'=>'/', 'text' => 'Accueil'])
                <li class="nav-item {{ request()->is('/my-list') ? 'active' : '' }}">
                    @auth
                    @if(Auth::user()->hasRole("mycologist"))
                    <a href="{{route('GETmaListe')}}" class="nav-link" >Ma Liste<span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : 'vide' }}</span></a>
                    @endif
                    @endauth
                </li>
                @include('partials.nav-item',['link'=>'/mushrooms', 'text' => 'Liste'])
                
                @auth

                @include('partials.nav-item',['link'=>'my-account', 'text' => 'Mon compte'])

                @include('partials.nav-item',['link'=>'disconnection', 'text' => 'Déconnexion'])

                @else


                @include('partials.nav-item',['link'=>'connection', 'text' => 'Connexion'])

                @include('partials.nav-item',['link'=>'inscription', 'text' => 'Inscription'])

                @endauth
            </ul>
        </div>
    </nav>


    <div class="corpsPage" >
        @yield('content')
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-confirmation2@4.1.0/dist/bootstrap-confirmation.min.js"></script>
    <script>
        $('[data-toggle="confirmation"]').confirmation();
    </script>
</body>

</html> 
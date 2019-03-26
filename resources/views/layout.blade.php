<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('title')
    <title>Document</title>

   
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    @yield('link')

</head>

<body>
    
    <!-- <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="{{route('GETaccueil')}}">Navbar</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    @auth
                        @include('partials.nav-item',['link'=>'my-account', 'text' => 'Mon compte'])
                        @include('partials.nav-item',['link'=>'disconnection', 'text' => 'Déconnexion'])
                    @else
                        @include('partials.nav-item',['link'=>'connection', 'text' => 'Connexion'])
                        @include('partials.nav-item',['link'=>'inscription', 'text' => 'Inscription'])
                    @endauth
                </ul>
            </div>
        </div>
    </nav> -->




    <nav class=" navbar-default navbar-expand-lg navbar-light bg-light navbar test" style="margin-bottom: 30px">

            <a class="navbar-brand" href="{{route('GETaccueil')}}">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav mr-auto">
                    @include('partials.nav-item',['link'=>'/', 'text' => 'Accueil'])

                <li class="nav-item {{ request()->is('/my-list') ? 'active' : '' }}">
                    @auth
                        @if(Auth::user()->hasRole("mycologist"))
                            <a href="{{route('GETmaListe')}}" class="nav-link">Ma Liste<span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : 'vide' }}</span></a>
                        @endif 
                    @endauth
                </li>

            </ul>

            <ul class="navbar-nav my-2 my-lg-0">
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

    <div class="corpsPage">
        <div class="container">@include('flash::message')</div>
        
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
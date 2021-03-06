@extends('layout')

@section('title')
<title>Accueil</title>
@endsection

@section('link')
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endsection

@section('content')

<div class="jumbotron bg-image bg-image-wedding bg-center-bottom" id="fondimage">
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col">
                <h1 class="display-4" style="margin-top:100px;text-align:center;">Société <br> Lorraine <br> de mycologie</h1>
            </div>

        </div>

    </div>
</div>

<div class="containerPrincipale">
    <div class="container">
      <!--   <div class="container containerPrincipale " style="margin-top: 20px;margin-bottom: 20px;">@include('flash::message')</div>
        <div class="row ">
            <div class="jumbotron welcomeJumbotron ">
                <h1>Bienvenue !</h1>
                <p>La société lorraine de mycologie est ravie de vous proposer une solution numérique vous permettant de consulter toutes les informations disponibles sur les champignons répertoriés.</p>
                <p>
                    <a class="btn btn-lg btn-secondary welcomeJumbotronBtn" href='{{route("GETmushrooms")}}' role="button">Accéder à la base de données</a>
                    <a class="btn btn-lg btn-secondary welcomeJumbotronBtn" href='{{route("GETlexique")}}' role="button">Accéder au lexique</a>
                </p>
            </div>
        </div> -->
        
            <div class="row">
                <h2 style="color:black;">Bienvenue</h2>
            </div>
            <div class="row" style="margin-bottom: 40px;">
                <div class="col"><a class="btn btn-secondary welcomeBtn" href='{{route("GETmushrooms")}}' role="button">Accéder à la base de données</a></div>
                <div class="col"><a class="btn btn-secondary welcomeBtn" href='{{route("GETlexique")}}' role="button">Accéder au lexique</a></div>
            </div>

        @auth
        @if(Auth::user()->hasRole("mycologist"))
        <div class="row" style="margin-top: 0">
            <h2>Options pour les mycologues :<h2>
        </div>
        <div class="row" style="margin-bottom: 40px">
            <div class="col"><a class="btn btn-secondary welcomeBtn" href='{{route("GETaddMushroom")}}'>Ajouter un champignon</a></div>
            <div class="col"><a class="btn btn-secondary welcomeBtn" href='{{route("GEThistory")}}'>Historique des impression de cartes</a></div>
        </div>
        @endif

        @if(Auth::user()->hasRole("admin"))
        <div class="row">
            <h2>Options pour les Administateurs :<h2>
        </div>
        <div class="row" style="margin-bottom: 40px">
            <div class="col"><a class="btn btn-secondary welcomeBtn" href='{{route("GETusers")}}'>Changer les droits des utilisateurs</a></div>
        </div>
        @endif
        @endauth
    </div>
</div>

@endsection 
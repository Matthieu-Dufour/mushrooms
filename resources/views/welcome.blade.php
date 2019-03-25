@extends('layout')

@section('content')


<div class="container">
    <div class="row">
        <div class="jumbotron welcomeJumbotron">
            <h1>Bienvenue !</h1>
            <p>La société lorraine de mycologie est ravie de vous proposer une solution numérique vous permettant de consulter toutes les informations disponibles sur les champignons répertoriés.</p>
            <p>Lorem ipsum</p>
            <p>
                <a class="btn btn-lg btn-primary welcomeJumbotronBtn" href='/mushrooms' role="button">Accéder à la base de données &raquo;</a>
            </p>
        </div>
    </div>
    @auth
        @if(Auth::user()->hasRole("mycologist"))
            <div class="row">
                <h2>Options pour les mycologues :<h2>
            </div>
            <div class="row">
                <div class="col"><a class="btn btn-secondary welcomeBtn" href='/mushroomAdd'>Ajouter un champignon</a></div>
                <div class="col"><a class="btn btn-secondary welcomeBtn" href='/cards'>Imprimer des cartes</a></div>
                <div class="col"><a class="btn btn-secondary welcomeBtn" href='/history'>Historique des impression de cartes</a></div>
            </div>
        @endif

        @if(Auth::user()->hasRole("admin"))
            <div class="row">
                <h2>Options pour Administateurs :<h2>
            </div>
            <div class="row">
                <div class="col"><a class="btn btn-secondary welcomeBtn" href='/users'>Changer les droits des utilisateurs</a></div>
            </div>
        @endif
    @endauth
</div>


@endsection 
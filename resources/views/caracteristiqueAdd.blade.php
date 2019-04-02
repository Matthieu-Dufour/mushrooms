@extends('layout')

@section('link')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="{{ asset('css/correctionNav.css') }}" rel="stylesheet">
@endsection

@section('title')
    <title>Caractéristique</title>
@endsection

@section('content')
<div class="container">
<div class="container containerPrincipale " style="margin-top: 20px;margin-bottom: 20px;">@include('flash::message')</div>
<div class="row" style="margin-top:20px;margin-bottom:20px;"><h1>Editer</h1></div>
    <form action="{{route('POSTaddCaracteristique')}}" method="post">
        {{ csrf_field() }}

        <div class="col">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Choisissez une caractéristique à ajouter</label>
                        <select class="form-control mushroomAddInput" type="caracteristique" name="caracteristique" id="caracteristique">
                            <option value="Odeur">Odeur</option>
                            <option>Environnement</option>
                            <option>Type Trophique</option>
                            <option>Groupe</option>
                            <option>Comestibilité</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Nom de la caractéristique</label>
                        <input class="form-control mushroomAddInput" type="nom" name="nom">
                    </div>
                </div>
            </div>

        </div>

        @auth
            @if(Auth::user()->hasRole("mycologist"))
                <button type="submit" class="btn btn-secondary" style="margin-bottom:20px;">Ajouter</button>
            @endif
        @endauth
    </form>
    <a href="{{URL::previous()}}" ><button class="btn btn-danger mushroomAddBtn"  >Annuler</button></a>
</div>

@endsection 
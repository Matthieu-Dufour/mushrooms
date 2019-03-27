@extends('layout')

@section('title')
<title>Lexique</title>
@endsection

@section('content')
<div class="container">
    <div class="container containerPrincipale " style="margin-top: 20px;margin-bottom: 20px;">@include('flash::message')</div>
    <div class="row">
        <div class="col">
            <h1 style="margin-top:20px;margin-bottom:20px;">Lexique</h1>
        </div>
        @auth
        @if(Auth::user()->hasRole("mycologist"))
        <div class="col"><a class="btn btn-secondary welcomeBtn" href='{{route("GETaddLexique")}}'>Ajouter un mot</a></div>
        @endif
        @endauth
    </div>


    @foreach ($lexique as $mot)
    <div class="row">
        <a data-toggle="collapse" data-target="#{{ $mot->mot }}" style="margin-top:20px;">
            <h5>{{ $mot->mot }}</h5>
        </a>
        <div class="container collapse" id="{{ $mot->mot }}">
            <div class="row">
                @auth
                @if(Auth::user()->hasRole("mycologist"))
                <div class="col-2"><a class="btn btn-secondary welcomeBtn" href='{{route("GETeditLexique", ["id" => $mot->id])}}'>Editer</a><a class="btn btn-danger welcomeBtn" href='{{route("GETdeleteLexique", ["id" => $mot->id])}}' data-toggle="confirmation"
                        data-btn-ok-label="Supprimer" data-btn-ok-class="btn-danger"
                        data-btn-cancel-label="Annuler" data-btn-cancel-class="btn-dark"
                        data-title="Êtes vous sûr ?" data-content="Cette action est irréversible">Supprimer</a></div>
                @endif
                @endauth
                <div class="col">{{ $mot->definition }}</div>
            </div>
        </div>
    </div>

    @endforeach

</div>
@endsection 
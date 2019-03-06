@extends('layout')

@section('content')
    <h1>{{ $mushroom->name }}</h1>

    @auth
    <a href="/mushroom/{{ $mushroom->id}}/edit">Editer</a>
    @endauth
    <a href="/mushrooms">Retour à la liste</a>
@endsection
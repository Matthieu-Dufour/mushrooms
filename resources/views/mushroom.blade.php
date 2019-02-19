@extends('layout')

@section('content')
    <h1>{{ $mushroom->name }}</h1>

    <a href="/mushroom/{{ $mushroom->id}}/edit">Editer</a>
    <a href="/mushrooms">Retour à la liste</a>
@endsection
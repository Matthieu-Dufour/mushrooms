@extends('layout')

@section('content')
<div class="container">
    <h1>{{ $mushroom->name }}</h1>

    @auth
    <a class="btn btn-primary mushroomBtn" href="/mushroom/{{ $mushroom->id}}/edit">Editer</a>
    @endauth
    <a class="btn btn-primary mushroomBtn" href="/mushrooms">Retour à la liste</a>
</div>
@endsection 
@extends('layout')

@section('content')
<div class="container">
    <h1>{{ $mushroom->name }}</h1>

    @auth
    <a class="btn btn-primary mushroomBtn" href="{{route('GETeditMushroom', ['id' => $mushroom->id ])}}"   >Editer</a>
    @endauth
    <a class="btn btn-primary mushroomBtn" href="{{route('GETmushrooms')}}">Retour à la liste</a>
</div>
@endsection 
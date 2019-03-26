@extends('layout')

@section('title')
    <title>{{ $mushroom->name }}</title>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <h1 style="margin-top:20px;margin-bottom:20px;">{{ $mushroom->name }}</h1>
    </div>
    <div class="col">
        <div class="row">
            <div class="col">{{ $mushroom->odeur }}</div>
            <div class="col">{{ $mushroom->odeur }}</div>
            <div class="col">{{ $mushroom->odeur }}</div>
        </div>
        <div class="row">
            <div class="col">{{ $mushroom->odeur }}</div>
            <div class="col">{{ $mushroom->odeur }}</div>
            <div class="col">{{ $mushroom->odeur }}</div>
        </div>
        <div class="row">
            <div class="col">{{ $mushroom->odeur }}</div>
            <div class="col">{{ $mushroom->odeur }}</div>
            <div class="col">{{ $mushroom->odeur }}</div>
        </div>
    </div>

    @auth
    <a class="btn btn-secondary mushroomBtn" href="{{route('GETeditMushroom', ['id' => $mushroom->id ])}}" style="margin-top:20px;" >Editer</a>
    @endauth
    <a class="btn btn-secondary mushroomBtn" href="{{route('GETmushrooms')}}" style="margin-top:20px;">Retour à la liste</a>
</div>
@endsection 
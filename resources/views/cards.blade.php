@extends('layout')

@section('content')

    <h1>Cartes</h1>

    <ul>
        @foreach($mushrooms as $mushroom)
        
        <a href="/mushroom/{{ $mushroom->id }}"><li>{{ $mushroom->name }}</li></a>

        @endforeach
    </ul>

@endsection
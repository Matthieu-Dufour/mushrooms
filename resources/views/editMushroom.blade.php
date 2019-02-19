@extends('layout')

@section('content')

    <h1>Editer</h1>

    <form action="/mushroom/{{ $mushroom->id}}/edit" method="post">
        {{ csrf_field() }}
    
        <div class="form-group">
            <label>Nom</label>
            <input class="form-control" type="text" name="name" placeholder="Nom" value="{{ $mushroom->name }}">
        </div>
    
        <button type="submit" class="btn btn-primary">Editer</button>
    </form>

@endsection
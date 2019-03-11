@extends('layout')

@section('content')
<div class="container">
    <form action="/mushroomAdd" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label>Nom</label>
            <input class="form-control mushroomAddInput" type="name" name="name" placeholder="Nom">
        </div>

        <button type="submit" class="btn btn-primary mushroomAddBtn">Ajouter le champignon</button>
    </form>
</div>
@endsection 
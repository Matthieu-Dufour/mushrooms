@extends('layout')

@section('content')
<form action="/mushroomAdd" method="post">
    {{ csrf_field() }}

    <div class="form-group">
        <label>Nom</label>
        <input class="form-control" type="name" name="name" placeholder="Nom">
    </div>

    <button type="submit" class="btn btn-primary">Ajouter le champignon</button>
</form>
@endsection
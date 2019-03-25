@extends('layout')

@section('content')
<div class="container">
    <form action="{{route('POSTaddMushroom')}}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label>Nom</label>
            <input class="form-control mushroomAddInput" type="name" name="name" placeholder="Nom">
            <input class="form-control mushroomAddInput" type="nameLatin" name="nameLatin" placeholder="Nom Latin">
            <input class="form-control mushroomAddInput" type="odeur" name="odeur" placeholder="Odeur">
            <input class="form-control mushroomAddInput" type="comestible" name="comestible" placeholder="Comestibilité">
            <input class="form-control mushroomAddInput" type="ecologie" name="ecologie" placeholder="Ecologie">
            <input class="form-control mushroomAddInput" type="chapeau" name="chapeau" placeholder="Chapeau">
            <input class="form-control mushroomAddInput" type="lames" name="lames" placeholder="Lames">
            <input class="form-control mushroomAddInput" type="pied" name="pied" placeholder="Pied">
            <input class="form-control mushroomAddInput" type="chair" name="chair" placeholder="Chair">
            <input class="form-control mushroomAddInput" type="sporee" name="sporee" placeholder="Sporée">
        </div>

        <button type="submit" class="btn btn-primary mushroomAddBtn">Ajouter le champignon</button>
    </form>
</div>
@endsection 
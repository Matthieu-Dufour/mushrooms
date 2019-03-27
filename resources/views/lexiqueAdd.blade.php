@extends('layout')

@section('title')
<title>Ajout d'un mot</title>
@endsection

@section('link')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <h1 style="margin-top:20px;margin-bottom:20px;">Ajouter un mot au lexique</h1>
    </div>

    <form action="{{route('POSTaddLexique')}}" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mot</label>
                    <input type="text" class="form-control" placeholder="Mot" name="mot">
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Définition</label>
                    <textarea class="form-control" name="definition"></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mushroomAddBtn" style="margin-bottom:20px;">Ajouter le mot</button>
    </form>
    <a href="{{ route('GETlexique') }}" ><button class="btn btn-danger mushroomAddBtn"  >Annuler</button></a>
</div>

@endsection 
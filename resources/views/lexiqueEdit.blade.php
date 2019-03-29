@extends('layout')

@section('title')
<title>Modification d'un mot</title>
@endsection

@section('link')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <h1 style="margin-top:20px;margin-bottom:20px;">Ajouter un mot au lexique</h1>
    </div>

    <form action="{{route('POSTeditLexique', ['id' => $mot->id])}}" method="post">
        {{ csrf_field() }} 
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label >Mot</label>
                    <input type="text" class="form-control" placeholder="Mot" name="mot" value="{{ $mot->mot }}">
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Définition</label>
                    <textarea class="form-control" name="definition">{{ $mot->definition }}</textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mushroomAddBtn" style="margin-bottom:20px;">Edit</button>
    </form>
    <a href="{{ route('GETlexique') }}" ><button class="btn btn-danger mushroomAddBtn"  >Annuler</button></a>
</div>

@endsection 
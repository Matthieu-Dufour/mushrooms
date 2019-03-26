@extends('layout')

@section('title')
    <title>Editer</title>
@endsection

@section('content')
<div class="container">
<div class="container containerPrincipale " style="margin-top: 20px;margin-bottom: 20px;">@include('flash::message')</div>
    <div class="row" style="margin-top:20px;margin-bottom:20px;"><h1>Editer</h1></div>

    <form action="route('POSTeditMushroom', ['id' => $mushroom->id)]" method="post">
        {{ csrf_field() }}


        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Nom</label>
                    <input class="form-control inputEdit" type="text" name="name" placeholder="Nom" value="{{ $mushroom->name }}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Nom</label>
                    <input class="form-control inputEdit" type="text" name="name" placeholder="Nom" value="{{ $mushroom->name }}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Nom</label>
                    <input class="form-control inputEdit" type="text" name="name" placeholder="Nom" value="{{ $mushroom->name }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Nom</label>
                    <input class="form-control inputEdit" type="text" name="name" placeholder="Nom" value="{{ $mushroom->name }}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Nom</label>
                    <input class="form-control inputEdit" type="text" name="name" placeholder="Nom" value="{{ $mushroom->name }}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Nom</label>
                    <input class="form-control inputEdit" type="text" name="name" placeholder="Nom" value="{{ $mushroom->name }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Nom</label>
                    <input class="form-control inputEdit" type="text" name="name" placeholder="Nom" value="{{ $mushroom->name }}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Nom</label>
                    <input class="form-control inputEdit" type="text" name="name" placeholder="Nom" value="{{ $mushroom->name }}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Nom</label>
                    <input class="form-control inputEdit" type="text" name="name" placeholder="Nom" value="{{ $mushroom->name }}">
                </div>
            </div>
        </div>
        @auth
        @if(Auth::user()->hasRole("mycologist"))
        <button type="submit" class="btn btn-secondary" style="margin-bottom:20px;">Editer</button>
        @endif
        @endauth
    </form>
    <a href="{{ route('GETmushroom', ['id' => $mushroom->id]) }}" ><button class="btn btn-danger mushroomAddBtn"  >Annuler</button></a>
</div>
@endsection 
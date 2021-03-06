@extends('layout')

@section('title')
    <title>Mon compte</title>
@endsection

@section('content')
<div class="container">
    <div class="row">
            <h1>Mon compte</h1>
    </div>
    <div class="container containerPrincipale " style="margin-top: 20px;margin-bottom: 20px;">@include('flash::message')</div>
    <div class="row" style="margin-bottom: 40px">
        <div class="col"></div>
        <div class="col"><a class="btn btn-secondary welcomeBtn" href='{{route("GETlistFavorite")}}'>Mes favoris</a></div>
        <div class="col"></div>
    </div>

    <div class="row">
        <h2>Modifier votre mot de passe :<h2>
    </div>
    <div class="row">
        <form action="{{route('POSTpassword')}}" method="post">
            {{ csrf_field() }}

            <div class="form-group">
                <label>Nouveau mot de passe</label>
                <input class="form-control accountInput" type="password" name="password" placeholder="Nouveau mot de passe">
                @if($errors->has('password'))
                {{ $errors->first('password') }}
                @endif
            </div>
            <div class="form-group">
                <label>Nouveau mot de passe (confirmation)</label>
                <input class="form-control accountInput" type="password" name="password_confirmation" placeholder="Nouveau mot de passe (confirmation)">
                @if($errors->has('password_confirmation'))
                {{ $errors->first('password_confirmation') }}
                @endif
            </div>

            <button type="submit" class="btn btn-secondary accountBtn">Modifier mon mot de passe</button>

        </form>
    </div>
</div>
@endsection 
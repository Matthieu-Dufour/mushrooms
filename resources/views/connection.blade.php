@extends('layout')

@section('title')
    <title>Connexion</title>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <h1>Se connecter</h1>
    </div>
    <div class="container containerPrincipale " style="margin-top: 20px;margin-bottom: 20px;">@include('flash::message')</div>
    <form action="{{route('POSTconnexion')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Adresse email</label>
            <input class="form-control connectionInput" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
            @if($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
            @endif
        </div>
        <div class="form-group">
            <label>Mot de passe</label>
            <input class="form-control connectionInput" type="password" name="password" placeholder="Mot de passe">
            @if($errors->has('password'))
            <p>{{ $errors->first('password') }}</p>
            @endif
        </div>
        <button type="submit" class="btn btn-secondary connectionBtn">Se connecter</button>
    </form>
</div>
@endsection 
@extends('layout')

@section('title')
<title>Inscription</title>
@endsection

@section('content')
<div class="container">
    <form action="/inscription" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label>Adresse email</label>
            <input class="form-control inscriptionInput" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
            @if($errors->has('email'))
            {{ $errors->first('email') }}
            @endif
        </div>

        <div class="form-group">
            <label>Mot de passe</label>
            <input class="form-control inscriptionInput" type="password" name="password" placeholder="Mot de passe">
            @if($errors->has('password'))
            {{ $errors->first('password') }}
            @endif
        </div>

        <div class="form-group">
            <label>Mot de passe (confirmation)</label>
            <input class="form-control inscriptionInput" type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)">
            @if($errors->has('password_confirmation'))
            {{ $errors->first('password_confirmation') }}
            @endif
        </div>

        <button type="submit" class="btn btn-primary inscriptionBtn">M'inscrire</button>
    </form>
</div>
@endsection 
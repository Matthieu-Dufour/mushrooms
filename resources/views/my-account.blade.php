@extends('layout')

@section('content')
<div>
    <h1>Mon compte</h1>

    <p>Vous êtes bien connecté</p>

</div>

<form action="/password-change" method="post">
    {{ csrf_field() }}

    <div class="form-group">
        <label>Nouveau mot de passe</label>
        <input class="form-control" type="password" name="password" placeholder="Nouveau mot de passe">
        @if($errors->has('password'))
        {{ $errors->first('password') }}
        @endif
    </div>
    <div class="form-group">
        <label>Nouveau mot de passe (confirmation)</label>
        <input class="form-control" type="password" name="password_confirmation" placeholder="Nouveau mot de passe (confirmation)">
        @if($errors->has('password_confirmation'))
        {{ $errors->first('password_confirmation') }}
        @endif
    </div>

    <button type="submit" class="btn btn-primary">Modifier mon mot de passe</button>
    
</form>
@endsection
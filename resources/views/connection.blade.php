@extends('layout')

@section('content')
<div class="container">
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
        <button type="submit" class="btn btn-primary connectionBtn">Se connecter</button>
    </form>
</div>
@endsection 
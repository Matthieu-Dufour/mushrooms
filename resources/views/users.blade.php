@extends('layout')

@section('title')
    <title>Utilisateurs</title>
@endsection

@section('content')
<div class="container">
@include('flash::message')
    <div class="row" style="margin-top:20px;margin-bottom:20px;"><h1>Modification des droits</h1>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">email</th>
                <th scope="col">user</th>
                <th scope="col">mycologue</th>
                <th scope="col">admin</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <form action="{{route('POSTassignRoles')}}" method="post">
                    <td>{{ $user->email }} <input type="hidden" name="email" value="{{ $user->email }}"></td>
                    <td><input type="checkbox" {{ $user->hasRole('user') ? 'checked' : '' }} name="role_user"></td>
                    <td><input type="checkbox" {{ $user->hasRole('mycologist') ? 'checked' : '' }} name="role_mycologist"></td>
                    <td><input type="checkbox" {{ $user->hasRole('admin') ? 'checked' : '' }} name="role_admin"></td>
                    {{ csrf_field() }}
                    <td><button class="btn btn-secondary" type="submit">Changer les roles</button></td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 
@extends('layout')

@section('content')
<div class="container">
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
                <form action="/assignroles" method="post">
                    <td>{{ $user->email }} <input type="hidden" name="email" value="{{ $user->email }}"></td>
                    <td><input type="checkbox" {{ $user->hasRole('user') ? 'checked' : '' }} name="role_user"></td>
                    <td><input type="checkbox" {{ $user->hasRole('mycologist') ? 'checked' : '' }} name="role_mycologist"></td>
                    <td><input type="checkbox" {{ $user->hasRole('admin') ? 'checked' : '' }} name="role_admin"></td>
                    {{ csrf_field() }}
                    <td><button type="submit">Changer les roles</button></td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 
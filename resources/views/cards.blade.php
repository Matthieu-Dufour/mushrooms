@extends('layout')

@section('content')
<div class="container">
    <h1>Ajoutez des champignons dans votre liste</h1>

   

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mushrooms as $mushroom)
                <tr href='/addToCart/{{ $mushroom->id }}'>
                    <th scope="row">{{ $mushroom->id }}</th>
                    <td>{{ $mushroom->name }}</td>
                    <td><a class="btn btn-primary" href='/addToCart/{{ $mushroom->id }}'>Ajouter</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>


</div>
@endsection 
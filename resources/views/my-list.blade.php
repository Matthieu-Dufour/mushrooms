@extends('layout')

@section('content')
<div class="container">
    @if(Session::has('cart'))
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nom</th>
                <th scope="col">Quantité</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mushrooms as $mushroom)
            <tr>
                <th scope="row">{{ $mushroom['item']['id'] }}</th>
                <td>{{ $mushroom['item']['name'] }}</td>
                <td>{{ $mushroom['qty'] }}</td>
                <td>
                    <button type="button" class="btn btn-primary btn-xs dropdown-toggle listBtn" data-toggle="dropdown">Action <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                    , ['id' => 1]
                        <li><a href="{{route('GETreduce', ['id' => $mushroom['item']['id']])}}">Retirer une unité</a></li>
                        <li><a href="{{route('GETremove', ['id' => $mushroom['item']['id']])}}">Retirer tout</a></li>
                    </ul>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{route('POSTcheckout')}}" method="post">
        {{ csrf_field() }}
        <input type="submit" name="upvote" class="btn btn-primary listBtn" value="Imprimer" />
        <form>
            @else
            <p>Il n'y a pas de champignons dans votre liste d'impression</p>
            @endif
</div>
@endsection 
@extends('layout')

@section('title')
<title>Liste</title>
@endsection

@section('content')
<div class="container">
    <div class="row" style="margin-top:20px;margin-bottom:20px;">
        <h1>Votre liste</h1>
    </div>
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
                <td><a class="fa fa-minus" href="{{route('GETreduce', ['id' => $mushroom['item']['id']])}}" style="color:black;margin-right:5px;"></a>{{ $mushroom['qty'] }}<a class="fa fa-plus" style="color:black;margin-left:5px;" href="{{route('GETaddItem', ['id' => $mushroom['item']['id']])}}"></a></td>
                <td>
                    <button type="button" class="btn btn-secondary btn-xs dropdown-toggle listBtn" data-toggle="dropdown">Action <span class="caret"></span></button>
                    <ul class="dropdown-menu">
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
        <input type="submit" name="upvote" class="btn btn-secondary listBtn" value="Imprimer" />
        <form>
            @else
            <h2 style="margin-top:20px;">Il n'y a pas de champignons dans votre liste d'impression</h2>
            <div class="row" style="margin-bottom: 40px">
                <div class="col"></div>
                <div class="col"><a class="btn btn-secondary welcomeBtn" href='{{route("GETcards")}}'>Imprimer des cartes</a></div>
                <div class="col"></div>
            </div>
            @endif
</div>
@endsection 
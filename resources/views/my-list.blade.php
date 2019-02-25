@extends('layout')

@section('content')

    @if(Session::has('cart'))
        <ul>
            @foreach($mushrooms as $mushroom)
                <li>
                    <span class="badge">{{ $mushroom['qty'] }}</span>
                    <strong>{{ $mushroom['item']['name'] }}</strong>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                        <li><a href="/reduce/{{$mushroom['item']['id']}}"> Reduce by 1</a></li>
                            <li><a href="/remove/{{$mushroom['item']['id']}}"> Reduce All</a></li>
                        </ul>
                    </div>
                </li>
            @endforeach
        </ul>
        <form action="/checkout" method="post">
            {{ csrf_field() }}
            <input type="submit" name="upvote" value="Imprimer" />
        <form>
    @else
        <p>Rien dans le panier</p>
    @endif
@endsection

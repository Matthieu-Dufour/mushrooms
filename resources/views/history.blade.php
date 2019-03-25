@extends('layout')

@section('content')
<div class="container">
    <h1>HISTORIQUE</h1>

    

   @foreach($orders as $order)
   @php
    $source = $order->created_at;
    $date = new DateTime($source);
    $newdate = $date->format('d.m.Y');
   @endphp


    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col"></th>
                <th scope="col">Commande du : {{ $newdate }}</th>
                <th scope="col"><a class="btn btn-secondary welcomeBtn" href="{{ route('GETprint', ['order' => $order]) }}">Imprimer</a></th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Quantité</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->cart->items as $item)
            <tr>
                <th scope="row">{{ $item['item']['id'] }}</th>
                <td>{{ $item['item']['name'] }}</td>
                <td>{{ $item['qty'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endforeach

</div>
@endsection 
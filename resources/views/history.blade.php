@extends('layout')

@section('content')

    <h1>HISTORIQUE</h1>

    
    <div class="panel panel-default">
        <div class="panel-body">
            <ul class="list-group">
                
                
                
            </ul>
        </div>
    </div>
    

    @foreach($orders as $order)
    <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">{{ $order->created_at }}</h3>
            </div>
            <div class="panel-body">
                    @foreach($order->cart->items as $item)
                    <li class="list-group-item">
                            {{ $item['item']['name'] }} | {{ $item['qty'] }}
                        </li>
                    @endforeach
            </div>
          </div>
          @endforeach

@endsection
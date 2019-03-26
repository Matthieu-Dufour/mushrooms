<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('title')
    <title>Document</title>

</head>

<body>

@section('content')
<div class="container">
    @foreach($res as $ress)
    @for ($i = 0; $i < $ress['qty']; $i++)
    <div style="border: solid black; font-family: 'Gill Sans', sans-serif;">
        <div style="border-bottom: solid black; text-align: center"> <h1> {{ $ress['item']->name }} </h1> <br> <h3> {{ $ress['item']->nameLatin }} </h3> </div>
        <div style="font-size: 20px"> <b> Odeur : </b> {{ $ress['item']->odeur }} </div> <div style="font-size: 20px"> <b> Comestible : </b> {{ $ress['item']->comestible }} </div>
        <div style="display: hidden"> {!!QrCode::size('500')->format('png')->errorCorrection('H')->generate(url('/mushroom/'.$ress['item']->id), 'qrcode/qrcode.png');!!} </div>
        <div style="width: 100%; text-align: right;"> <img src="qrcode/qrcode.png" style="width: 100px; clear: right"/> </div>
    </div>
    <div style="height: 155px"></div>
    @endfor
    @endforeach
</div>
@endsection

<div class="corpsPage">
        <div class="container">@include('flash::message')</div>
        
        @yield('content')
    </div>

</body>
</html>
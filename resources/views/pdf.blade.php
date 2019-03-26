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
    <div style="border: solid black; font-family: Arial">
        <div style="border-bottom: solid black; text-align: center"> <h1> {{ $res->name }} </h1> <br> <h3> {{ $res->nameLatin }} </h3> </div>
        <div> <b> Pied : </b> {{ $res->pied }} </div> <div> <b> Chair : </b> {{ $res->chair }} </div>
        <div> <b> Odeur : </b> {{ $res->odeur }} </div> <div> <b> Comestible : </b> {{ $res->comestible }} </div>
        <div> <b> Ecologie : </b> {{ $res->ecologie }} </div> <div> <b> Chapeau : </b> {{ $res->chapeau }} </div>
        <div> <b> Lames : </b> {{ $res->lames }} </div> <div> <b> Sporee : </b> {{ $res->sporee }}  </div>
        <div style="display: hidden"> {!!QrCode::size(500)->format('png')->generate('Make me into a QrCode!', 'qrcode/qrcode.png');!!} </div>
        <img src="qrcode/qrcode.png" style="width: 250px;"/>
    </div>
</div>
@endsection

<div class="corpsPage">
        <div class="container">@include('flash::message')</div>
        
        @yield('content')
    </div>

</body>
</html>
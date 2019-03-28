<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('title')
    <title>Document</title>
    <link rel="stylesheet" href="css/pdf.css">
    <style>
        .page-break {
            page-break-after: always;
        }
        .fiche {
            border: solid lightgrey; 
            font-family: 'Gill Sans', sans-serif; 
        }
    </style>
</head>

<body>

@section('content')
<div class="container">
    @foreach($res as $ress)
        <!-- 529 px -->
        <!-- Si il y a moins de 4 champignons à imprimer -->
        @if ($ress['qty']/4 <= 1)
            <div class="row">
                @if ($ress['qty']/4 >= 1/4)
                <div class="col-xs-6" style="border: solid black;">
                    <img src="img/SLM.jpg" style="width: 85px;"/>
                    <div style="text-align: center; border-bottom: solid black; width:369px; padding-bottom: 15px; margin-left: 120px; font-size: 28px; float:left;"> Société Lorraine de Mycologie <br> </div>
                    <div style="text-align: right; width:369px; margin-left: 120px; margin-top: 60px; font-size: 28px; float:left;"> {{ $ress['item']->comestible }} </div>
                    <div style="text-align: center"> <h2> {{ $ress['item']->name }} </h2>  <h3><i> {{ $ress['item']->nameLatin }} </i></h3> </div>
                    
                    <div style="text-align: right;"> <img src="qrcode/qrcode{{$ress['item']->id}}.png" style="width: 100px; clear: right"/> </div>
                </div>
                @endif
                @if ($ress['qty']/4 >= 2/4)
                <div class="col-xs-6" style="border: solid black;">
                    <img src="img/SLM.jpg" style="width: 85px;"/>
                    <div style="text-align: center; border-bottom: solid black; width:369px; padding-bottom: 15px; margin-left: 120px; font-size: 28px; float:left;"> Société Lorraine de Mycologie <br> </div>
                    <div style="text-align: right; width:369px; margin-left: 120px; margin-top: 60px; font-size: 28px; float:left;"> {{ $ress['item']->comestible }} </div>
                    <div style="text-align: center"> <h2> {{ $ress['item']->name }} </h2>  <h3><i> {{ $ress['item']->nameLatin }} </i></h3> </div>
                    
                    <div style="text-align: right;"> <img src="qrcode/qrcode{{$ress['item']->id}}.png" style="width: 100px; clear: right"/> </div>
                </div>
                @endif
            </div>
            <div class="row">
                @if ($ress['qty']/4 >= 3/4)
                <div class="col-xs-6" style="border: solid black;">
                    <img src="img/SLM.jpg" style="width: 85px;"/>
                    <div style="text-align: center; border-bottom: solid black; width:369px; padding-bottom: 15px; margin-left: 120px; font-size: 28px; float:left;"> Société Lorraine de Mycologie <br> </div>
                    <div style="text-align: right; width:369px; margin-left: 120px; margin-top: 60px; font-size: 28px; float:left;"> {{ $ress['item']->comestible }} </div>
                    <div style="text-align: center"> <h2> {{ $ress['item']->name }} </h2> <h3><i> {{ $ress['item']->nameLatin }} </i></h3> </div>
                    <div style="text-align: right;"> <img src="qrcode/qrcode{{$ress['item']->id}}.png" style="width: 100px; clear: right;"/> </div>
                </div>
                @endif
                @if ($ress['qty']/4 >= 4/4)
                <div class="col-xs-6" style="border: solid black;">
                    <img src="img/SLM.jpg" style="width: 85px;"/>
                    <div style="text-align: center; border-bottom: solid black; width:369px; padding-bottom: 15px; margin-left: 120px; font-size: 28px; float:left;"> Société Lorraine de Mycologie <br> </div>
                    <div style="text-align: right; width:369px; margin-left: 120px; margin-top: 60px; font-size: 28px; float:left;"> {{ $ress['item']->comestible }} </div>
                    <div style="text-align: center"> <h2> {{ $ress['item']->name }} </h2>  <h3><i> {{ $ress['item']->nameLatin }} </i></h3> </div>
                    
                    <div style="text-align: right;"> <img src="qrcode/qrcode{{$ress['item']->id}}.png" style="width: 100px; clear: right"/> </div>
                </div>
                @endif
        </div>
        @else
            <!-- Si il y a plus de 4 champignons à imprimer -->
            @for ($i = 0; $i < $ress['qty']/4; $i++)
                <div class="row">
                    <div class="col-xs-6" style="border: solid black;">
                        <img src="img/SLM.jpg" style="width: 85px;"/>
                        <div style="text-align: center; border-bottom: solid black; width:369px; padding-bottom: 15px; margin-left: 120px; font-size: 28px; float:left;"> Société Lorraine de Mycologie <br> </div>
                        <div style="text-align: right; width:369px; margin-left: 120px; margin-top: 60px; font-size: 28px; float:left;"> {{ $ress['item']->comestible }} </div>
                        <div style="text-align: center"> <h2> {{ $ress['item']->name }} </h2>  <h3><i> {{ $ress['item']->nameLatin }} </i></h3> </div>
                        
                        <div style="text-align: right;"> <img src="qrcode/qrcode{{$ress['item']->id}}.png" style="width: 100px; clear: right"/> </div>
                    </div> 
                    <div class="col-xs-6" style="border: solid black;">
                        <img src="img/SLM.jpg" style="width: 85px;"/>
                        <div style="text-align: center; border-bottom: solid black; width:369px; padding-bottom: 15px; margin-left: 120px; font-size: 28px; float:left;"> Société Lorraine de Mycologie <br> </div>
                        <div style="text-align: right; width:369px; margin-left: 120px; margin-top: 60px; font-size: 28px; float:left;"> {{ $ress['item']->comestible }} </div>
                        <div style="text-align: center"> <h2> {{ $ress['item']->name }} </h2>  <h3><i> {{ $ress['item']->nameLatin }} </i></h3> </div>
                        
                        <div style="text-align: right;"> <img src="qrcode/qrcode{{$ress['item']->id}}.png" style="width: 100px; clear: right"/> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6" style="border: solid black;">
                        <img src="img/SLM.jpg" style="width: 85px;"/>
                        <div style="text-align: center; border-bottom: solid black; width:369px; padding-bottom: 15px; margin-left: 120px; font-size: 28px; float:left;"> Société Lorraine de Mycologie <br> </div>
                        <div style="text-align: right; width:369px; margin-left: 120px; margin-top: 60px; font-size: 28px; float:left;"> {{ $ress['item']->comestible }} </div>
                        <div style="text-align: center"> <h2> {{ $ress['item']->name }} </h2>  <h3><i> {{ $ress['item']->nameLatin }} Salut</i></h3> </div>
                        
                        <div style="text-align: right;"> <img src="qrcode/qrcode{{$ress['item']->id}}.png" style="width: 100px; clear: right"/> </div>
                    </div>
                    <div class="col-xs-6" style="border: solid black;">
                        <img src="img/SLM.jpg" style="width: 85px;"/>
                        <div style="text-align: center; border-bottom: solid black; width:369px; padding-bottom: 15px; margin-left: 120px; font-size: 28px; float:left;"> Société Lorraine de Mycologie <br> </div>
                        <div style="text-align: right; width:369px; margin-left: 120px; margin-top: 60px; font-size: 28px; float:left;"> {{ $ress['item']->comestible }} </div>
                        <div style="text-align: center"> <h2> {{ $ress['item']->name }} </h2>  <h3><i> {{ $ress['item']->nameLatin }} </i></h3> </div>
                        
                        <div style="text-align: right;"> <img src="qrcode/qrcode{{$ress['item']->id}}.png" style="width: 100px; clear: right"/> </div>
                    </div>
                </div>
            <div class="page-break"></div>
            @endfor
            <!-- Vu que l'on divise pas 4 le nombre total de champignons à imprimer, on récupère le reste si il y en a -->
            @if ($ress['qty']%4 > 0)
                <div class="row">
                    @if ($ress['qty']%4 >= 1)
                    <div class="col-xs-6" style="border: solid black;">
                        <img src="img/SLM.jpg" style="width: 85px;"/>
                        <div style="text-align: center; border-bottom: solid black; width:369px; padding-bottom: 15px; margin-left: 120px; font-size: 28px; float:left;"> Société Lorraine de Mycologie <br> </div>
                        <div style="text-align: right; width:369px; margin-left: 120px; margin-top: 60px; font-size: 28px; float:left;"> {{ $ress['item']->comestible }} </div>
                        <div style="text-align: center"> <h2> {{ $ress['item']->name }} </h2> <h3><i> {{ $ress['item']->nameLatin }} </i></h3> </div>
                        
                        <div style="text-align: right;"> <img src="qrcode/qrcode{{$ress['item']->id}}.png" style="width: 100px; clear: right"/> </div>
                    </div>
                    @endif
                    @if ($ress['qty']%4 >= 2)
                    <div class="col-xs-6" style="border: solid black;">
                        <img src="img/SLM.jpg" style="width: 85px;"/>
                        <div style="text-align: center; border-bottom: solid black; width:369px; padding-bottom: 15px; margin-left: 120px; font-size: 28px; float:left;"> Société Lorraine de Mycologie <br> </div>
                        <div style="text-align: right; width:369px; margin-left: 120px; margin-top: 60px; font-size: 28px; float:left;"> {{ $ress['item']->comestible }} </div>
                        <div style="text-align: center"> <h2> {{ $ress['item']->name }} </h2> <h3><i> {{ $ress['item']->nameLatin }} </i></h3> </div>
                        
                        <div style="text-align: right;"> <img src="qrcode/qrcode{{$ress['item']->id}}.png" style="width: 100px; clear: right"/> </div>
                    </div>
                    @endif
                </div>
                <div class="row">
                    @if ($ress['qty']%4 >= 3)
                    <div class="col-xs-6" style="border: solid black;">
                        <img src="img/SLM.jpg" style="width: 85px;"/>
                        <div style="text-align: center; border-bottom: solid black; width:369px; padding-bottom: 15px; margin-left: 120px; font-size: 28px; float:left;"> Société Lorraine de Mycologie <br> </div>
                        <div style="text-align: right; width:369px; margin-left: 120px; margin-top: 60px; font-size: 28px; float:left;"> {{ $ress['item']->comestible }} </div>
                        <div style="text-align: center"> <h2> {{ $ress['item']->name }} </h2> <h3><i> {{ $ress['item']->nameLatin }} </i></h3> </div>
                        
                        <img src="qrcode/qrcode{{$ress['item']->id}}.png" style="width: 100px; float: right"/> </div>
                    </div>
                    @endif
                </div>
            @endif
        @endif
    @endforeach
</div>
@endsection

<div class="corpsPage">
    <div class="container">@include('flash::message')</div>
    
    @yield('content')
</div>
</body>
</html>

<div class="row">
    <div class="col-xs-2"> Image </div>
    <div class="col-xs-10"> 
        <div class="row">
            <div class="col-xs-10"> Texte </div>
        </div>
        <div class="row">
            <div class="col-xs-10"> Texte <div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
</div>
<div class="row">
    <div class="col-xs-12">
</div>
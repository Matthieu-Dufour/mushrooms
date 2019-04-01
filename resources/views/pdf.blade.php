<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('title')
    <title>Document</title>
    <link rel="stylesheet" href="css/pdf.css">
</head>

<body>
@php($index = 1)
@for($i = 0; $i < $res->totalQty; $i++)
    @if($i%4 == 0)
    <table>
    @endif
        @if($i%2 == 0)
        <tr>
        @endif
        @if($res->items[$index]['qty'])
            <td class="fiche">
                <div> 
                    <img src="img/pdf/SLM.jpg" class="imgslm"/>
                    <div class="SLMC">
                        <div class="SLM"> Société Lorraine de Mycologie <br> </div>
                        @if($res->items[$index]['item']->comestible == "Comestible") <div class ="comestibilite"> {{ $res->items[$index]['item']->comestible }} </div> <div class="cercleblue"></div> @endif
                        @if($res->items[$index]['item']->comestible == "Sans valeur") <div class ="comestibilite"> {{ $res->items[$index]['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                        @if($res->items[$index]['item']->comestible == "Comestible bien cuit") <div class ="comestibilite" style="width: 81%"> {{ $res->items[$index]['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                        @if($res->items[$index]['item']->comestible == "Mortel") <div class ="comestibilite"> {{ $res->items[$index]['item']->comestible }} </div> <div class="cerclered"></div> @endif
                        @if($res->items[$index]['item']->comestible == "Toxique/comestible avec recommandation") <div class ="comestibilite" style="width: 81%"> {{ $res->items[$index]['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                        @if($res->items[$index]['item']->comestible == "Suspect") <div class ="comestibilite"> {{ $res->items[$index]['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                        @if($res->items[$index]['item']->comestible == "Toxique") <div class ="comestibilite"> {{ $res->items[$index]['item']->comestible }} </div> <div class="cercleorange"></div> @endif
                    </div>
                </div>
                <div class="champignon"> 
                    <div class="nom"> {{ $res->items[$index]['item']->name }} </div> 
                    <div class="nomlatin"><i> {{ $res->items[$index]['item']->name }} </i></div> 
                </div>
                <div class="container">
                    <span>Texte</span>
                    <div class="sub-container">
                    <img src="qrcode/qrcode{{ $res->items[$index]['item']->id }}.png" class="qrcode"/>
                    </div>
                </div>
            </td>
            @php($res->items[$index]['qty'] = $res->items[$index]['qty'] - 1)
            @if($res->items[$index]['qty'] == 0)
                @php($index = $index + 1)
            @endif
        @endif
        @if($i == $res->totalQty-1)
        @if($res->totalQty%2 == 1)
        <td class="fiche">
        
        </td>
        @endif
        @endif
        @if($i%2 == 1)
        </tr>
        @endif
    @if($i%4 == 3)
    </table>
    <div class="page-break"></div>
    @endif
@endfor
</body>
</html>
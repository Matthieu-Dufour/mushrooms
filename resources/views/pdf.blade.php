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
@php($keys = array_keys($res->items))
@php($index = 0)
@for($i = 0; $i < $res->totalQty; $i++)
    @if($i%4 == 0)
    <table>
    @endif
        @if($i%2 == 0)
        <tr>
        @endif
        @if($res->items[$keys[$index]]['qty'])
            <td class="fiche">
                <div> 
                    <img src="img/pdf/SLM.jpg" class="imgslm"/>
                    <div class="SLMC">
                        <div class="SLM"> Société Lorraine de Mycologie <br> </div>
                        @if($res->items[$keys[$index]]['item']->comestible == "Comestible") <div class ="comestibilite"> {{ $res->items[$keys[$index]]['item']->comestible }} </div> <div class="cercleblue"></div> @endif
                        @if($res->items[$keys[$index]]['item']->comestible == "Sans valeur") <div class ="comestibilite"> {{ $res->items[$keys[$index]]['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                        @if($res->items[$keys[$index]]['item']->comestible == "Comestible bien cuit") <div class ="comestibilite" style="width: 81%"> {{ $res->items[$keys[$index]]['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                        @if($res->items[$keys[$index]]['item']->comestible == "Mortel") <div class ="comestibilite"> {{ $res->items[$keys[$index]]['item']->comestible }} </div> <div class="cerclered"></div> @endif
                        @if($res->items[$keys[$index]]['item']->comestible == "Toxique/comestible avec recommandation") <div class ="comestibilite" style="width: 81%"> {{ $res->items[$keys[$index]]['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                        @if($res->items[$keys[$index]]['item']->comestible == "Suspect") <div class ="comestibilite"> {{ $res->items[$keys[$index]]['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                        @if($res->items[$keys[$index]]['item']->comestible == "Toxique") <div class ="comestibilite"> {{ $res->items[$keys[$index]]['item']->comestible }} </div> <div class="cercleorange"></div> @endif
                    </div>
                </div>
                <div class="champignon" style="margin-bottom: 14px;">
                <div class="champignon">
                    <div class="nomlatin"><i> {{ $res->items[$keys[$index]]['item']->nameLatin }} </i></div>
                    <div class="nom"> {{ $res->items[$keys[$index]]['item']->name }} </div>
                </div>
                <span class="container">
                    <span class="info"> {{ $res->items[$keys[$index]]['item']->ecologie }} <br> {{ $res->items[$keys[$index]]['item']->type_trophique }} </span> 
                    <span class="blanc"></span>
                    <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(100)->generate(url('/mushroom/'.$res->items[$keys[$index]]['item']->id))) }}" class="qrcode"/>
                    </div>
                </span>
            </td>
            @php($res->items[$keys[$index]]['qty'] = $res->items[$keys[$index]]['qty'] - 1)
            @if($res->items[$keys[$index]]['qty'] == 0)
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
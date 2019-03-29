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
    @foreach($res as $ress)
    @if($ress['qty']/4 < 2)
    <table>
    <tr>
        <td class="fiche"> @if($ress['qty']/4 >= 1/4)
            <div> 
                <img src="img/pdf/SLM.jpg" class="imgslm"/>
                <div class="SLMC">
                    <div class="SLM"> Société Lorraine de Mycologie <br> </div>
                    @if($ress['item']->comestible == "Comestible") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> @endif
                    @if($ress['item']->comestible == "Sans valeur") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                    @if($ress['item']->comestible == "Comestible bien cuit") <div class ="comestibilite" style="width: 81%"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                    @if($ress['item']->comestible == "Mortel") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclered"></div> @endif
                    @if($ress['item']->comestible == "Toxique/Comestible avec recommandation") <div class ="comestibilite" style="width: 81%"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                    @if($ress['item']->comestible == "Suspect") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                    @if($ress['item']->comestible == "Toxique") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cercleorange"></div> @endif
                </div>
            </div>
            <div class="champignon"> 
                <div class="nom"> {{ $ress['item']->name }} </div> 
                <div class="nomlatin"><i> {{ $ress['item']->name }} </i></div> 
            </div>
            <div class="container">
                <span>Texte</span>
                <div class="sub-container">
                <img src="qrcode/qrcode{{ $ress['item']->id }}.png" class="qrcode"/>
                </div>
            </div>
        </td> @endif
        <td class="fiche"> @if($ress['qty']/4 >= 2/4)
            <div> 
                <img src="img/pdf/SLM.jpg" class="imgslm"/>
                <div class="SLMC">
                    <div class="SLM"> Société Lorraine de Mycologie <br> </div>
                    @if($ress['item']->comestible == "Comestible") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> @endif
                    @if($ress['item']->comestible == "Sans valeur") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                    @if($ress['item']->comestible == "Comestible bien cuit") <div class ="comestibilite" style="width: 81%"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                    @if($ress['item']->comestible == "Mortel") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclered"></div> @endif
                    @if($ress['item']->comestible == "Toxique/Comestible avec recommandation") <div class ="comestibilite" style="width: 81%"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                    @if($ress['item']->comestible == "Suspect") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                    @if($ress['item']->comestible == "Toxique") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cercleorange"></div> @endif
                </div>
            </div>
            <div class="champignon"> 
                <div class="nom"> {{ $ress['item']->name }} </div> 
                <div class="nomlatin"><i> {{ $ress['item']->name }} </i></div> 
            </div>
            <div class="container">
                <span>Texte</span>
                <div class="sub-container">
                <img src="qrcode/qrcode{{ $ress['item']->id }}.png" class="qrcode"/>
                </div>
            </div>
        </td> @endif
    </tr>
    <tr>
        <td class="fiche"> @if($ress['qty']/4 >= 3/4)
            <div> 
                <img src="img/pdf/SLM.jpg" class="imgslm"/>
                <div class="SLMC">
                    <div class="SLM"> Société Lorraine de Mycologie <br> </div>
                    @if($ress['item']->comestible == "Comestible") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> @endif
                    @if($ress['item']->comestible == "Sans valeur") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                    @if($ress['item']->comestible == "Comestible bien cuit") <div class ="comestibilite" style="width: 81%"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                    @if($ress['item']->comestible == "Mortel") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclered"></div> @endif
                    @if($ress['item']->comestible == "Toxique/Comestible avec recommandation") <div class ="comestibilite" style="width: 81%"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                    @if($ress['item']->comestible == "Suspect") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                    @if($ress['item']->comestible == "Toxique") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cercleorange"></div> @endif
                </div>
            </div>
            <div class="champignon"> 
                <div class="nom"> {{ $ress['item']->name }} </div> 
                <div class="nomlatin"><i> {{ $ress['item']->name }} </i></div> 
            </div>
            <div class="container">
                <span>Texte</span>
                <div class="sub-container">
                <img src="qrcode/qrcode{{ $ress['item']->id }}.png" class="qrcode"/>
                </div>
            </div>
        </td> @endif
        <td class="fiche"> @if($ress['qty']/4 >= 4/4)
            <div> 
                <img src="img/pdf/SLM.jpg" class="imgslm"/>
                <div class="SLMC">
                    <div class="SLM"> Société Lorraine de Mycologie <br> </div>
                    @if($ress['item']->comestible == "Comestible") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> @endif
                    @if($ress['item']->comestible == "Sans valeur") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                    @if($ress['item']->comestible == "Comestible bien cuit") <div class ="comestibilite" style="width: 81%"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                    @if($ress['item']->comestible == "Mortel") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclered"></div> @endif
                    @if($ress['item']->comestible == "Toxique/Comestible avec recommandation") <div class ="comestibilite" style="width: 81%"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                    @if($ress['item']->comestible == "Suspect") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                    @if($ress['item']->comestible == "Toxique") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cercleorange"></div> @endif
                </div>
            </div>
            <div class="champignon"> 
                <div class="nom"> {{ $ress['item']->name }} </div> 
                <div class="nomlatin"><i> {{ $ress['item']->name }} </i></div> 
            </div>
            <div class="container">
                <span>Texte</span>
                <div class="sub-container">
                <img src="qrcode/qrcode{{ $ress['item']->id }}.png" class="qrcode"/>
                </div>
            </div>
        </td> @endif
    </tr>
    </table>
    @else
    @for($i = 0; $i < $ress['qty']/4; $i++)
    <table>
    <tr>
        <td class="fiche">
            <div> 
                <img src="img/pdf/SLM.jpg" class="imgslm"/>
                <div class="SLMC">
                    <div class="SLM"> Société Lorraine de Mycologie <br> </div>
                    @if($ress['item']->comestible == "Comestible") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> @endif
                    @if($ress['item']->comestible == "Sans valeur") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                    @if($ress['item']->comestible == "Comestible bien cuit") <div class ="comestibilite" style="width: 81%"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                    @if($ress['item']->comestible == "Mortel") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclered"></div> @endif
                    @if($ress['item']->comestible == "Toxique/Comestible avec recommandation") <div class ="comestibilite" style="width: 81%"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                    @if($ress['item']->comestible == "Suspect") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                    @if($ress['item']->comestible == "Toxique") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cercleorange"></div> @endif
                </div>
            </div>
            <div class="champignon"> 
                <div class="nom"> {{ $ress['item']->name }} </div> 
                <div class="nomlatin"><i> {{ $ress['item']->name }} </i></div> 
            </div>
            <div class="container">
                <span>Texte</span>
                <div class="sub-container">
                <img src="qrcode/qrcode{{ $ress['item']->id }}.png" class="qrcode"/>
                </div>
            </div>
        </td>
        <td class="fiche">
            <div> 
                <img src="img/pdf/SLM.jpg" class="imgslm"/>
                <div class="SLMC">
                    <div class="SLM"> Société Lorraine de Mycologie <br> </div>
                    @if($ress['item']->comestible == "Comestible") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> @endif
                    @if($ress['item']->comestible == "Sans valeur") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                    @if($ress['item']->comestible == "Comestible bien cuit") <div class ="comestibilite" style="width: 81%"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                    @if($ress['item']->comestible == "Mortel") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclered"></div> @endif
                    @if($ress['item']->comestible == "Toxique/Comestible avec recommandation") <div class ="comestibilite" style="width: 81%"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                    @if($ress['item']->comestible == "Suspect") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                    @if($ress['item']->comestible == "Toxique") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cercleorange"></div> @endif
                </div>
            </div>
            <div class="champignon"> 
                <div class="nom"> {{ $ress['item']->name }} </div> 
                <div class="nomlatin"><i> {{ $ress['item']->name }} </i></div> 
            </div>
            <div class="container">
                <span>Texte</span>
                <div class="sub-container">
                <img src="qrcode/qrcode{{ $ress['item']->id }}.png" class="qrcode"/>
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td class="fiche">
            <div> 
                <img src="img/pdf/SLM.jpg" class="imgslm"/>
                <div class="SLMC">
                    <div class="SLM"> Société Lorraine de Mycologie <br> </div>
                    @if($ress['item']->comestible == "Comestible") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> @endif
                    @if($ress['item']->comestible == "Sans valeur") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                    @if($ress['item']->comestible == "Comestible bien cuit") <div class ="comestibilite" style="width: 81%"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                    @if($ress['item']->comestible == "Mortel") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclered"></div> @endif
                    @if($ress['item']->comestible == "Toxique/Comestible avec recommandation") <div class ="comestibilite" style="width: 81%"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                    @if($ress['item']->comestible == "Suspect") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                    @if($ress['item']->comestible == "Toxique") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cercleorange"></div> @endif
                </div>
            </div>
            <div class="champignon"> 
                <div class="nom"> {{ $ress['item']->name }} </div> 
                <div class="nomlatin"><i> {{ $ress['item']->name }} </i></div> 
            </div>
            <div class="container">
                <span>Texte</span>
                <div class="sub-container">
                <img src="qrcode/qrcode{{ $ress['item']->id }}.png" class="qrcode"/>
                </div>
            </div>
        </td>
        <td class="fiche">
            <div> 
                <img src="img/pdf/SLM.jpg" class="imgslm"/>
                <div class="SLMC">
                    <div class="SLM"> Société Lorraine de Mycologie <br> </div>
                    @if($ress['item']->comestible == "Comestible") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> @endif
                    @if($ress['item']->comestible == "Sans valeur") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                    @if($ress['item']->comestible == "Comestible bien cuit") <div class ="comestibilite" style="width: 81%"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                    @if($ress['item']->comestible == "Mortel") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclered"></div> @endif
                    @if($ress['item']->comestible == "Toxique/Comestible avec recommandation") <div class ="comestibilite" style="width: 81%"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                    @if($ress['item']->comestible == "Suspect") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                    @if($ress['item']->comestible == "Toxique") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cercleorange"></div> @endif
                </div>
            </div>
            <div class="champignon"> 
                <div class="nom"> {{ $ress['item']->name }} </div> 
                <div class="nomlatin"><i> {{ $ress['item']->name }} </i></div> 
            </div>
            <div class="container">
                <span>Texte</span>
                <div class="sub-container">
                <img src="qrcode/qrcode{{ $ress['item']->id }}.png" class="qrcode"/>
                </div>
            </div>
        </td>
    </tr>
    </table>
    <div class="page-break"></div>
    @endfor
    @endif
    @if($ress['qty']%4 > 0)
    @if($ress['qty']/4 > 1)
    @if($ress['qty']/4 < 2) <div class="page-break"></div> @endif
    <table>
    <tr>
        <td class="fiche"> @if($ress['qty']%4 >= 1)
            <div> 
                <img src="img/pdf/SLM.jpg" class="imgslm"/>
                <div class="SLMC">
                    <div class="SLM"> Société Lorraine de Mycologie <br> </div>
                    @if($ress['item']->comestible == "Comestible") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> @endif
                    @if($ress['item']->comestible == "Sans valeur") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                    @if($ress['item']->comestible == "Comestible bien cuit") <div class ="comestibilite" style="width: 81%"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                    @if($ress['item']->comestible == "Mortel") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclered"></div> @endif
                    @if($ress['item']->comestible == "Toxique/Comestible avec recommandation") <div class ="comestibilite" style="width: 81%"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                    @if($ress['item']->comestible == "Suspect") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                    @if($ress['item']->comestible == "Toxique") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cercleorange"></div> @endif
                </div>
            </div>
            <div class="champignon"> 
                <div class="nom"> {{ $ress['item']->name }} </div> 
                <div class="nomlatin"><i> {{ $ress['item']->name }} </i></div> 
            </div>
            <div class="container">
                <span>Texte</span>
                <div class="sub-container">
                <img src="qrcode/qrcode{{ $ress['item']->id }}.png" class="qrcode"/>
                </div>
            </div>
        </td> @endif
        <td class="fiche"> @if($ress['qty']%4 >= 2)
            <div> 
                <img src="img/pdf/SLM.jpg" class="imgslm"/>
                <div class="SLMC">
                    <div class="SLM"> Société Lorraine de Mycologie <br> </div>
                    @if($ress['item']->comestible == "Comestible") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> @endif
                    @if($ress['item']->comestible == "Sans valeur") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                    @if($ress['item']->comestible == "Comestible bien cuit") <div class ="comestibilite" style="width: 81%"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                    @if($ress['item']->comestible == "Mortel") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclered"></div> @endif
                    @if($ress['item']->comestible == "Toxique/Comestible avec recommandation") <div class ="comestibilite" style="width: 81%"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                    @if($ress['item']->comestible == "Suspect") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                    @if($ress['item']->comestible == "Toxique") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cercleorange"></div> @endif
                </div>
            </div>
            <div class="champignon"> 
                <div class="nom"> {{ $ress['item']->name }} </div> 
                <div class="nomlatin"><i> {{ $ress['item']->name }} </i></div> 
            </div>
            <div class="container">
                <span>Texte</span>
                <div class="sub-container">
                <img src="qrcode/qrcode{{ $ress['item']->id }}.png" class="qrcode"/>
                </div>
            </div>
        </td> @endif
    </tr>
    <tr>
        <td class="fiche"> @if($ress['qty']%4 >= 3)
            <div> 
                <img src="img/pdf/SLM.jpg" class="imgslm"/>
                <div class="SLMC">
                    <div class="SLM"> Société Lorraine de Mycologie <br> </div>
                    @if($ress['item']->comestible == "Comestible") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> @endif
                    @if($ress['item']->comestible == "Sans valeur") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                    @if($ress['item']->comestible == "Comestible bien cuit") <div class ="comestibilite" style="width: 81%"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                    @if($ress['item']->comestible == "Mortel") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclered"></div> @endif
                    @if($ress['item']->comestible == "Toxique/Comestible avec recommandation") <div class ="comestibilite" style="width: 81%"> {{ $ress['item']->comestible }} </div> <div class="cercleblue"></div> <div class="cercleorange"></div> @endif
                    @if($ress['item']->comestible == "Suspect") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cerclegrey"></div> @endif
                    @if($ress['item']->comestible == "Toxique") <div class ="comestibilite"> {{ $ress['item']->comestible }} </div> <div class="cercleorange"></div> @endif
                </div>
            </div>
            <div class="champignon"> 
                <div class="nom"> {{ $ress['item']->name }} </div> 
                <div class="nomlatin"><i> {{ $ress['item']->name }} </i></div> 
            </div>
            <div class="container">
                <span>Texte</span>
                <div class="sub-container">
                <img src="qrcode/qrcode{{ $ress['item']->id }}.png" class="qrcode"/>
                </div>
            </div>
        </td> @endif
        <td class="fiche">
            
        </td>
    </tr>
    </table>
    @endif
    @endif
    @endforeach
</body>
</html>


@extends('layout')

@section('title')

<title>{{ $mushroom->name }}</title>
@endsection

@section('content')
<div class="container">
    <div class="container containerPrincipale " style="margin-top: 20px;margin-bottom: 20px;">@include('flash::message')</div>
    <div class="row">
        <h1 style="margin-top:20px;margin-bottom:20px;"><span style="font-variant: small-caps;">{{ $mushroom->nameLatin }}</span>
            ({{$mushroom->name}})
            @auth
                @if($mushroom->isFavorited())
                    <a class="fa fa-star checked" href="{{route('GETtoggleFavorite', [ 'id' => $mushroom->id ])}}"></a>
                @else
                    <a class="fa fa-star" href="{{route('GETtoggleFavorite', [ 'id' => $mushroom->id ])}}"></a>
                @endif
            @endauth
        </h1>
    </div>
    <div class="col">
        <div class="row">
            <div class="col">
                <label>Surnom: </label><br>{{ $mushroom->surnom }}</div>
            <div class="col">
                <label>Odeur: </label><br>
                @foreach($odeurs as $odeur)
                    @if($odeur->id == $mushroom->odeur)
                        {{ $odeur->nom }}
                    @endif
                @endforeach
            </div>
            <div class="col">
                <label>Comestibilité: </label><br>
                @foreach($comestibilites as $comestibilite)
                    @if($comestibilite->id == $mushroom->comestible)
                        {{ $comestibilite->nom }}
                    @endif
                @endforeach
            </div>
        </div>
        <br>
        <div class="row">

            <div class="col">
                <label>Biotope: </label><br>
                @foreach($ecologies as $ecologie)
                    @if($ecologie->id == $mushroom->ecologie)
                        {{ $ecologie->region }}
                    @endif
                @endforeach
            </div>
            <div class="col"><label>Chapeau: </label><br>{{ $mushroom->chapeau }}</div>
            <div class="col"><label>Lames: </label><br>{{ $mushroom->lames }}</div>
        </div>
        <br>
        <div class="row">
            <div class="col"><label>Pied: </label><br>{{ $mushroom->pied }}</div>
            <div class="col"><label>Chair: </label><br>{{ $mushroom->chair }}</div>
            <div class="col">
                <label>Type Trophique: </label><br>
                @foreach($trophiques as $trophique)
                    @if($trophique->id == $mushroom->type_trophique)
                        {{ $trophique->status }}
                    @endif
                @endforeach
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col"><label>Groupe: </label><br>
            @foreach($groupes as $groupe)
                @if($groupe->id == $mushroom->groupe)
                    {{ $groupe->nom }}
                @endif
            @endforeach
            </div>
            <div class="col">
                <label>Confusions possibles: </label><br>
                    @foreach($confusions as $confusion)
                        @foreach($liste as $mushConf)
                            @if($confusion->mushroom1_id == $mushroom->id)
                                @if($confusion->mushroom2_id == $mushConf->id)
                                    @foreach($comestibilites as $com)
                                        @if($com->id == $mushConf->comestible)
                                            <ul>
                                                <li><a href="{{$mushConf->id}}">{{ $mushConf->nameLatin }}, {{$com->nom}}</a></li>
                                            </ul>
                                        @endif
                                    @endforeach
                                @endif
                            @endif
                        @endforeach
                    @endforeach
            </div>
            @if($mushroom->image != null)
                <div class="col"><img src="/img/{{ $mushroom->image }}" /></div>
            @endif
        </div>
    </div>

    @auth
        @if(Auth::user()->hasRole("mycologist"))
            <a class="btn btn-secondary mushroomBtn" href="{{route('GETeditMushroom', ['id' => $mushroom->id ])}}" style="margin-top:20px;">Editer</a>
        @endif
    @endauth
    <a class="btn btn-secondary mushroomBtn" href="{{route('GETmushrooms')}}" style="margin-top:20px;">Retour à la liste</a>
</div>
@endsection 
@extends('layout')

@section('link')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="/js/preview.js"></script>
<link href="{{ asset('css/correctionNav.css') }}" rel="stylesheet">
@endsection

@section('title')
    <title>Editer</title>
@endsection

@section('content')
<div class="container">
<div class="container containerPrincipale " style="margin-top: 20px;margin-bottom: 20px;">@include('flash::message')</div>
<div class="row" style="margin-top:20px;margin-bottom:20px;"><h1>Editer</h1></div>
    <form action="{{route('POSTeditMushroom', ['id' => $mushroom->id])}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}


        <div class="col">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Nom</label>
                        <input class="form-control mushroomAddInput" type="name" name="name" placeholder="Nom" value="{{ $mushroom->name }}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Nom Latin</label>
                        <input class="form-control mushroomAddInput" type="nameLatin" name="nameLatin" placeholder="Nom Latin" value="{{ $mushroom->nameLatin }}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Surnom</label>
                        <input class="form-control mushroomAddInput" type="surnom" name="surnom" placeholder="Surnom" value="{{ $mushroom->surnom }}">
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col">
                    <div class="form-group">
                        <label>Chapeau</label>
                        <input class="form-control mushroomAddInput" type="chapeau" name="chapeau" placeholder="Chapeau" value="{{ $mushroom->chapeau }}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Lames</label>
                        <input class="form-control mushroomAddInput" type="lames" name="lames" placeholder="Lames" value="{{ $mushroom->lames }}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Pied</label>
                        <input class="form-control mushroomAddInput" type="pied" name="pied" placeholder="Pied" value="{{ $mushroom->pied }}">
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col">
                    <div class="form-group">
                        <label>Chair</label>
                        <input class="form-control mushroomAddInput" type="chair" name="chair" placeholder="Chair" value="{{ $mushroom->chair }}">
                    </div>
                </div>
                <div class="col">
                    <label>Odeur</label>
                    <select class="form-control mushroomAddInput" type="odeur" name="odeur" id="odeur" >
                        @foreach($odeurs as $odeur)
                            @if($mushroom->odeur == $odeur->id)
                                <option value="{{ $mushroom->odeur }}" selected="selected" >{{ $odeur->nom }}</option>
                            @else
                                <option value="{{ $odeur->id }}">{{ $odeur->nom }}</option>
                            @endif 
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Comestibilité</label>
                        <select class="form-control mushroomAddInput" type="comestibilite" name="comestibilite" id="comestibilite" >
                            @foreach($comestibilites as $comestibilite)
                                @if($mushroom->comestible == $comestibilite->id)
                                    <option value="{{ $mushroom->comestible }}" selected="selected" >{{ $comestibilite->nom }}</option>
                                @else
                                    <option value="{{ $comestibilite->id }}">{{ $comestibilite->nom }}</option>
                                @endif 
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Environnement</label>
                        <select class="form-control mushroomAddInput" type="ecologie" name="ecologie" id="ecologie" >
                            @foreach($ecologies as $eco)
                                @if($mushroom->ecologie == $eco->id)
                                    <option value="{{ $eco->id }}" selected="selected">{{ $eco->region }}</option>
                                @else
                                    <option value="{{ $eco->id }}">{{ $eco->region }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col">
                    <label>Type Trophique</label>
                    <select class="form-control mushroomAddInput" type="trophique" name="trophique" id="trophique" >
                        @foreach($trophiques as $trophique)
                            @if($mushroom->type_trophique == $trophique->id)
                                <option value="{{ $mushroom->type_trophique }}" selected="selected">{{ $trophique->status }}</option>
                            @else
                                <option value="{{ $trophique->id }}">{{ $trophique->status }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Groupe</label>
                        <select class="form-control mushroomAddInput" type="groupe" name="groupe" id="groupe">
                            @foreach($groupes as $groupe)
                                @if($mushroom->groupe == $groupe->id)
                                    <option value="{{ $mushroom->comestible }}" selected="selected">{{ $groupe->nom }}</option>
                                @else
                                    <option value="{{ $groupe->id }}">{{ $groupe->nom }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Confusion possible</label>
                        <select class="form-control mushroomAddInput" type="confusion" name="confusion" id="confusion" >
                            @foreach($liste as $confusion)
                                <option value="{{ $confusion->id }}">{{ $confusion->name }}</option>
                            @endforeach
                        </select>
                        <button type="button" class="btn btn-primary">Plus</button>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Image</label>
                        <div class="input-group image-preview">
                        <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                            <span class="input-group-btn">
                                <!-- image-preview-clear button -->
                                <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                    <span class="glyphicon glyphicon-remove"></span> Clear
                                </button>
                                <!-- image-preview-input -->
                                <div class="btn btn-default image-preview-input">
                                    <span class="glyphicon glyphicon-folder-open"></span>
                                    <span class="image-preview-input-title">Browse</span>
                                    <input type="file" accept="image/png, image/jpeg, image/gif" name="image" value="/img/{{ $mushroom->image }}" onchange="readURL(this);"/> <!-- rename it -->
                                </div>
                            </span>
                        </div><!-- /input-group image-preview [TO HERE]--> 
                    </div>
                </div>
                <div class="col">
                    @if($mushroom->image == null)
                        <img id="preview" src="https://via.placeholder.com/300.png/" alt="your image" />
                    @else
                        <img id="preview" src="/img/{{ $mushroom->image }}" />
                    @endif
                </div>

            </div>
        </div>
        @auth
            @if(Auth::user()->hasRole("mycologist"))
                <button type="submit" class="btn btn-secondary" style="margin-bottom:20px;">Editer</button>
            @endif
        @endauth
    </form>
    <a href="{{ route('GETmushroom', ['id' => $mushroom->id]) }}" ><button class="btn btn-danger mushroomAddBtn"  >Annuler</button></a>
    <a href="{{ route('GETaddCaracteristique') }}" ><button class="btn btn-primary" >Ajouter une caractéristique</button></a>
</div>
@endsection 
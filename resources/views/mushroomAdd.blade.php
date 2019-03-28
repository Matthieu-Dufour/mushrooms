@extends('layout')

@section('link')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="/js/preview.js"></script>
<link href="{{ asset('css/correctionNav.css') }}" rel="stylesheet">
@endsection

@section('title')
    <title>Ajouts</title>
@endsection

@section('content')
<div class="container">
    <form action="{{route('POSTaddMushroom')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="col">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Nom</label>
                        <input class="form-control mushroomAddInput" type="name" name="name" placeholder="Nom">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Nom Latin</label>
                        <input class="form-control mushroomAddInput" type="nameLatin" name="nameLatin" placeholder="Nom Latin">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Surnom</label>
                        <input class="form-control mushroomAddInput" type="surnom" name="surnom" placeholder="Surnom">
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col">
                    <div class="form-group">
                        <label>Chapeau</label>
                        <input class="form-control mushroomAddInput" type="chapeau" name="chapeau" placeholder="Chapeau">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Lames</label>
                        <input class="form-control mushroomAddInput" type="lames" name="lames" placeholder="Lames">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Pied</label>
                        <input class="form-control mushroomAddInput" type="pied" name="pied" placeholder="Pied">
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col">
                    <div class="form-group">
                        <label>Chair</label>
                        <input class="form-control mushroomAddInput" type="chair" name="chair" placeholder="Chair">
                    </div>
                </div>
                <div class="col">
                    <label>Odeur</label>
                    <select class="form-control mushroomAddInput" type="odeur" name="odeur" id="odeur">
                        @foreach($odeurs as $odeur)
                        <option value="{{ $odeur->id }}">{{ $odeur->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Comestibilité</label>
                        <select class="form-control mushroomAddInput" type="comestibilite" name="comestibilite" id="comestibilite">
                            @foreach($comestibilites as $comestibilite)
                            <option value="{{ $comestibilite->id }}">{{ $comestibilite->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Environnement</label>
                        <select class="form-control mushroomAddInput" type="ecologie" name="ecologie" id="ecologie">
                            @foreach($ecologies as $ecologie)
                            <option value="{{ $ecologie->id }}">{{ $ecologie->region }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col">
                    <label>Type Trophique</label>
                    <select class="form-control mushroomAddInput" type="trophique" name="trophique" id="trophique">
                        @foreach($trophiques as $trophique)
                        <option value="{{ $trophique->id }}">{{ $trophique->status }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Groupe</label>
                        <select class="form-control mushroomAddInput" type="groupe" name="groupe" id="groupe">
                            @foreach($groupes as $groupe)
                            <option value="{{ $groupe->id }}">{{ $groupe->nom }}</option>
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
                                    <input type="file" accept="image/png, image/jpeg, image/gif" name="image" onchange="readURL(this);"/> <!-- rename it -->
                                </div>
                            </span>
                        </div><!-- /input-group image-preview [TO HERE]--> 
                    </div>
                </div>
                <div class="col">
                    <img id="preview" src="https://via.placeholder.com/300.png/" alt="your image" />
                </div>

            </div>
        </div>

        <button type="submit" class="btn btn-secondary mushroomAddBtn">Ajouter le champignon</button>
        
    </form>
    <a href="{{ route('GETaddCaracteristique') }}" ><button class="btn btn-primary" style="margin-top:20px;">Ajouter une caractéristique</button></a>

</div>
@endsection 
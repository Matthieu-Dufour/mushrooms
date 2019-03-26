@extends('layout')

@section('link')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@endsection

@section('content')
<div class="container">
    <form action="/mushroomAdd" method="post">
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
                    <select class="form-control mushroomAddInput" name="odeur" id="odeur">
                        @foreach($odeurs as $odeur)
                        <option value="{{ $odeur->id }}">{{ $odeur->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Comestibilité</label>
                        <select class="form-control mushroomAddInput" name="comestibilite" id="comestibilite">
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
                        <select class="form-control mushroomAddInput" name="ecologie" id="ecologie">
                            @foreach($ecologies as $ecologie)
                            <option value="{{ $ecologie->id }}">{{ $ecologie->region }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col">
                    <label>Type Trophique</label>
                    <select class="form-control mushroomAddInput" name="trophique" id="trophique">
                        @foreach($trophiques as $trophique)
                        <option value="{{ $trophique->id }}">{{ $trophique->status }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Comestibilité</label>
                        <select class="form-control mushroomAddInput" name="comestibilite" id="comestibilite">
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
                        <label>Groupe</label>
                        <select class="form-control mushroomAddInput" name="groupe" id="groupe">
                            @foreach($groupes as $groupe)
                            <option value="{{ $groupe->id }}">{{ $groupe->nom }}</option>
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
                                    <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                                </div>
                            </span>
                        </div><!-- /input-group image-preview [TO HERE]--> 
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mushroomAddBtn">Ajouter le champignon</button>
    </form>

</div>
@endsection 
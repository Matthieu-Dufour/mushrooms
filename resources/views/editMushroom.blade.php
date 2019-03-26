@extends('layout')

@section('link')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="/js/preview.js"></script>
@endsection

@section('title')
    <title>Editer</title>
@endsection

@section('content')
<div class="container">
    <form action="route('POSTeditMushroom', ['id' => $mushroom->id)]" method="post" enctype="multipart/form-data">
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
                    <select class="form-control mushroomAddInput" type="odeur" name="odeur" id="odeur" value="{{ $mushroom->odeur }}">
                        @foreach($odeurs as $odeur)
                        <option value="{{ $odeur->id }}">{{ $odeur->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Comestibilité</label>
                        <select class="form-control mushroomAddInput" type="comestibilite" name="comestibilite" id="comestibilite" value="{{ $mushroom->comestible }}">
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
                        <select class="form-control mushroomAddInput" type="ecologie" name="ecologie" id="ecologie" value="{{ $mushroom->ecologie }}">
                            @foreach($ecologies as $ecologie)
                            <option value="{{ $ecologie->id }}">{{ $ecologie->region }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col">
                    <label>Type Trophique</label>
                    <select class="form-control mushroomAddInput" type="trophique" name="trophique" id="trophique" value="{{ $mushroom->type_trophique }}">
                        @foreach($trophiques as $trophique)
                        <option value="{{ $trophique->id }}">{{ $trophique->status }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Groupe</label>
                        <select class="form-control mushroomAddInput" type="groupe" name="groupe" id="groupe" value="{{ $mushroom->groupe }}">
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
                                    <input type="file" accept="image/png, image/jpeg, image/gif" name="image" value="{{ $mushroom->image }}" onchange="readURL(this);"/> <!-- rename it -->
                                </div>
                            </span>
                        </div><!-- /input-group image-preview [TO HERE]--> 
                    </div>
                </div>
                <div class="col"></div>
                <div class="col">
                    <img id="preview" src="https://via.placeholder.com/300.png/" alt="your image" />
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
</div>
    </form>

</div>
@endsection 
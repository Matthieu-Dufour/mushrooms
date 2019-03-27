@extends('layout')

@section('title')
<title>Champignons</title>
@endsection

@section('link')
<link rel="stylesheet" href="{{ asset('css/mushrooms.css') }}">
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.22/dist/vue.js"></script>
@endsection

@section('content')
<div id='application' class="container">
    <div class="container containerPrincipale " style="margin-top: 20px;margin-bottom: 20px;">@include('flash::message')</div>
    <div class="col" style="margin-bottom:20px;">
        <div class="row" style="margin-top: 20px;margin-bottom: 20px;">
            <h1>Liste des champignons</h1>
        </div>
        <div class="container collapse" id="demo" style="margin-top:20px;margin-bottom:20px;">
            <div class="row">
                <div class="col">
                    <label>Comestibilite</label>
                    <select class="form-control" v-model="comestibilite">
                        <option value="vide">vide</option>
                        @foreach ($comestibilites as $comestibilite)
                        <option value="{{ $comestibilite->id }}">{{ $comestibilite->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label>Odeur</label>
                    <select class="form-control" v-model="odeur">
                        <option value="vide">vide</option>
                        @foreach ($odeurs as $odeur)
                        <option value="{{ $odeur->id }}">{{ $odeur->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label>Ecologie</label>
                    <select class="form-control" v-model="ecologie">
                        <option value="vide">vide</option>
                        @foreach ($ecologies as $ecologie)
                        <option value="{{ $ecologie->id }}">{{ $ecologie->region }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Trophique</label>
                    <select class="form-control" v-model="trophique">
                        <option value="vide">vide</option>
                        @foreach ($trophiques as $trophique)
                        <option value="{{ $trophique->id }}">{{ $trophique->status }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label>Groupe</label>
                    <select class="form-control" v-model="groupe">
                        <option value="vide">vide</option>
                        @foreach ($groupes as $groupe)
                        <option value="{{ $groupe->id }}">{{ $groupe->nom }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mushroomsBtn">
            <input type="text" name="name" placeholder="Rechercher" v-model="search">
            <a class="btn btn-secondary">Rechercher</a>
        </div>
        <div class="row d-flex justify-content-center mushroomsLink">
            <a data-toggle="collapse" data-target="#demo" style="margin-top:20px;">Recherche avancée ▼</a>
        </div>
    </div>


    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="mushroom in filteredList">
                    <th scope="row">@{{ mushroom.id }}</th>
                    <td>@{{ mushroom.name }}</td>
                <td>
                <a class="btn btn-secondary mushroomsBtn" :href="mushroom.routeVoir">Voir</a>
                @auth
                @if(Auth::user()->hasRole("mycologist"))
                
                    <a class="btn btn-secondary mushroomsBtn" :href="mushroom.routeEdit">Editer</a>
                    <a class="btn btn-danger mushroomsBtn"  style="color: #FFF !important;" data-toggle="confirmation"
                        data-btn-ok-label="Supprimer" data-btn-ok-class="btn-danger"
                        data-btn-cancel-label="Annuler" data-btn-cancel-class="btn-dark"
                        data-title="Êtes vous sûr ?" data-content="Cette action est irréversible" :href="mushroom.routeSuppr">Supprimer</a>
                

                @endif
                @endauth
                </td>
            </tr>

        </tbody>
    </table>

    <?php 
    $url = url('/mushroom');
    ?>

</div>
<script>
    var app = new Vue({
        el: "#application",
        data: {
            mushrooms: {!!json_encode($mushrooms) !!},
            search: "",
            odeur: "vide",
            url: {!!json_encode($url) !!},
            groupe: "vide",
            trophique: "vide",
            ecologie: "vide",
            comestibilite: "vide",
        },

        methods: {
            rechercher() {
                return this.mushrooms.filter(mushroom => {
                    let list;

                    list = mushroom.name.toLowerCase().includes(this.search.toLowerCase())
                    
                    if (this.comestibilite != "vide") {
                        list = list && mushroom.comestible.includes(this.comestibilite)
                    }

                    if (this.odeur != "vide") {
                        list = list && mushroom.odeur.includes(this.odeur)
                    }

                    if (this.ecologie != "vide") {
                        list = list && mushroom.ecologie.includes(this.ecologie)
                    }

                    if (this.groupe != "vide") {
                        list = list && mushroom.groupe.includes(this.groupe)
                    }

                    if (this.trophique != "vide") {
                        list = list && mushroom.type_trophique.includes(this.trophique)
                    }

                    return list
                })
            },
        },

        computed: {
            filteredList() {
                return this.mushrooms.filter(mushroom => {
                    let list;

                    mushroom.routeVoir = this.url + "/" + mushroom.id
                    mushroom.routeEdit = this.url + "/" + mushroom.id + "/edit"
                    mushroom.routeSuppr = this.url + "/" + mushroom.id + "/delete"

                    list = mushroom.name.toLowerCase().includes(this.search.toLowerCase())

                    if (this.odeur != "vide") {
                        list = list && mushroom.odeur.includes(this.odeur)
                    }

                    if (this.comestibilite != "vide") {
                        list = list && mushroom.comestible.includes(this.comestibilite)
                    }

                    if (this.ecologie != "vide") {
                        list = list && mushroom.ecologie.includes(this.ecologie)
                    }

                    if (this.groupe != "vide") {
                        list = list && mushroom.groupe.includes(this.groupe)
                    }

                    if (this.trophique != "vide") {
                        list = list && mushroom.type_trophique.includes(this.trophique)
                    }


                    return list
                })
            },


        },

    });
</script>
@endsection 
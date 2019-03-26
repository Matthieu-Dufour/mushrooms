@extends('layout')

@section('title')
    <title>Champignons</title>
@endsection

@section('link')
<link rel="stylesheet" href="{{ asset('css/mushrooms.css') }}">
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.22/dist/vue.js"></script>
@endsection

@section('content')
<div id='application' class="container" >
    
    <div class="col" style="margin-bottom:20px;">
        <div class="row" style="margin-top: 20px;margin-bottom: 20px;">
            <h1>Liste des champignons</h1>
        </div>
        <div class="container collapse" id="demo" style="margin-top:20px;margin-bottom:20px;">
        <div class="row">
            <div class="col">
                <label>Odeur</label>
                <select class="form-control" v-model="odeur">
                    <option>vide</option>
                    <option>odeur1</option>
                    <option>odeur2</option>
                    <option>odeur3</option>
                </select>
            </div>
            <div class="col">
                <label>Odeur</label>
                <select class="form-control" v-model="odeur">
                    <option>vide</option>
                    <option>odeur1</option>
                    <option>odeur2</option>
                    <option>odeur3</option>
                </select>
            </div>
            <div class="col">
                <label>Odeur</label>
                <select class="form-control" v-model="odeur">
                    <option>vide</option>
                    <option>odeur1</option>
                    <option>odeur2</option>
                    <option>odeur3</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label>Odeur</label>
                <select class="form-control" v-model="odeur">
                    <option>vide</option>
                    <option>odeur1</option>
                    <option>odeur2</option>
                    <option>odeur3</option>
                </select>
            </div>
            <div class="col">
                <label>Odeur</label>
                <select class="form-control" v-model="odeur">
                    <option>vide</option>
                    <option>odeur1</option>
                    <option>odeur2</option>
                    <option>odeur3</option>
                </select>
            </div>
            <div class="col">
                <label>Odeur</label>
                <select class="form-control" v-model="odeur">
                    <option>vide</option>
                    <option>odeur1</option>
                    <option>odeur2</option>
                    <option>odeur3</option>
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
                    <a class="btn btn-secondary mushroomsBtn" :href="mushroom.routeVoir" >Voir</a>
                    <a class="btn btn-secondary mushroomsBtn" :href="mushroom.routeEdit">Editer</a>
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
            mushrooms: {!! json_encode($mushrooms) !!},
            search: "",
            odeur: "vide",
            url: {!! json_encode($url) !!},
        },

        methods: {
            rechercher(){
                return this.mushrooms.filter(mushroom => {
                    let list;
                    
                    list = mushroom.name.toLowerCase().includes(this.search.toLowerCase())

                    if(this.odeur != "vide"){
                        list = list && mushroom.odeur.includes(this.odeur)
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

                    console.log(mushroom)
                    list = mushroom.name.toLowerCase().includes(this.search.toLowerCase())

                    if(this.odeur != "vide"){
                        list = list && mushroom.odeur.includes(this.odeur)
                    }                    

                    return list
                })
            },

        
        },

    });
</script>
@endsection 
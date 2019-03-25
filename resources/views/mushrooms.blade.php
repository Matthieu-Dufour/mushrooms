@extends('layout')

@section('link')
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.22/dist/vue.js"></script>
@endsection

@section('content')
<div id='application' class="container">
    <h1>Liste des champignons</h1>
    <input type="text" name="name" placeholder="Rechercher" v-model="search">

    <div class="form-group">
        <label>Odeur</label>
        <select class="form-control" v-model="odeur">
            <option>vide</option>
            <option>odeur1</option>
            <option>odeur2</option>
            <option>odeur3</option>
        </select>
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
                <th scope="row">@{{mushroom.id}}</th>
                <td>@{{ mushroom.name }}</td>
                <td>
                    <a class="btn btn-primary mushroomsBtn" :href="routeMushroom">Voir</a>
                    <a class="btn btn-primary mushroomsBtn" :href="routeEditMushroom">Editer</a>
                </td>
            </tr>
        </tbody>
    </table>



</div>
<script>
    var app = new Vue({
        el: "#application",
        data: {
            mushrooms: {!!json_encode($mushrooms) !!},
            search: "",
            odeur: "vide",
            routeMushroom: "{{route('GETmushroom'), ['id' => @{{mushroom.id}} ]}}",
            routeEditMushroom: "{{route('GETeditMushroom'), ['id' => @{{mushroom.id}} ]}}",
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
                    
                    list = mushroom.name.toLowerCase().includes(this.search.toLowerCase())

                    if(this.odeur != "vide"){
                        list = list && mushroom.odeur.includes(this.odeur)
                    }

                    return list
                })
            }
        },

    });
</script>
@endsection 
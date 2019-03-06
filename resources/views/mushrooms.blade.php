@extends('layout')

@section('link')
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.22/dist/vue.js"></script>
@endsection

@section('content')
    <div id='application'>
        <h1>Champignons</h1>
        <input type="text" name="name"  v-model="search">

        <div class="row">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
        </div>

        @{{search}}

        <ul>
                    <li v-for="mushroom in filteredList">
                        <a :href="'/mushroom/' + mushroom.id">
                            @{{ mushroom.name }}@{{mushroom.id}}
                        </a>
                    </li>
        </ul>

    </div>
    <script>
        var app = new Vue({
            el: "#application",
            data: {
                mushrooms : {!! json_encode($mushrooms) !!},
                search : "",
            },

            methods: {

            },

            computed: {
                filteredList() {
                    return this.mushrooms.filter(mushroom => {
                    return mushroom.name.toLowerCase().includes(this.search.toLowerCase())
                    })
                }
            },

        });
    </script>
@endsection
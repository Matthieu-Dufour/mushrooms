@extends('layout')

@section('title')
<title>Mes favoris</title>
@endsection


@section('content')
<div class="container">
    <div class="container containerPrincipale " style="margin-top: 20px;margin-bottom: 20px;">@include('flash::message')</div>
    <h1 style="margin-top:20px;margin-bottom:20px">Mes favoris</h1>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mushrooms as $mushroom)
            <tr>
                <th scope="row">
                    @auth
                    @if($mushroom->isFavorited())
                    <a class="fa fa-star checked" href="{{route('GETtoggleFavorite', [ 'id' => $mushroom->id ])}}"></a>
                    @else
                    <a class="fa fa-star" href="{{route('GETtoggleFavorite', [ 'id' => $mushroom->id ])}}"></a>
                    @endif
                    @endauth
                    {{ $mushroom->id }}
                </th>
                <td>{{ $mushroom->name }}</td>
                <td>
                    <a class="btn btn-secondary mushroomsBtn" href="{{route('GETmushroom', ['id' => $mushroom->id])}}">Voir</a>
                    @auth
                    @if(Auth::user()->hasRole("mycologist"))

                    <a class="btn btn-secondary mushroomsBtn" href="{{route('GETeditMushroom', ['id' => $mushroom->id])}}">Editer</a>
                    <a class="btn btn-danger mushroomsBtn" style="color: #FFF !important;" 
                    data-toggle="confirmation" data-btn-ok-label="Supprimer" data-btn-ok-class="btn-danger" 
                    data-btn-cancel-label="Annuler" data-btn-cancel-class="btn-dark" data-title="Êtes vous sûr ?" 
                    data-content="Cette action est irréversible" href=" {{route('GETdeleteMushroom', ['id' => $mushroom->id]) }}">Supprimer</a>

                    @endif
                    @endauth</td>
            </tr>
            @endforeach
        </tbody>
    </table>


</div>
@endsection 
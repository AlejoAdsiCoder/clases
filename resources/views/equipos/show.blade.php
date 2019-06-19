@extends('layouts.app')
@section('title','Equipos')
@section('content')

<div class="row">
    <div class="col-sm-4">
        <img src="{{$equipo['escudo']}}" />
    </div>
    <div class="col-sm-8">
        <p class="h3">{{$equipo['nombre']}}</p>
        <p class="h3">{{$equipo['dt']}}</p>

        <a href="/equipos" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><i class="fas fa-arrow-left"></i></a>
        <a href="/equipos/{{$id}}/edit" class="btn btn-success btn-lg active" role="button" aria-pressed="true"><i class="fas fa-pen"></i></a>
        <a href="#" class="btn btn-danger btn-lg active" role="button" aria-pressed="true"><i class="far fa-trash-alt"></i></a>

    </div>    
</div>

@endsection
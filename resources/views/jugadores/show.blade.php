@extends('layouts.app')
@section('title','Jugador')
@section('content')

<div class="row">
    <div class="col-sm-4">
        <img src="{{$jugador['foto']}}" />
    </div>
    <div class="col-sm-8">
        <p class="h3">{{$jugador['nombre']}}</p>
        <p class="h3">{{$jugador['posicion']}}</p>
        <p class="h3">{{$jugador['numero']}}</p>

        <a href="/jugadores" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><i class="fas fa-arrow-left"></i></a>
        <a href="/jugadores/{{$id}}/edit" class="btn btn-success btn-lg active" role="button" aria-pressed="true"><i class="fas fa-pen"></i></a>
        <a href="#" class="btn btn-danger btn-lg active" role="button" aria-pressed="true"><i class="far fa-trash-alt"></i></a>

    </div>    
</div>

@endsection
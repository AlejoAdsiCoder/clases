@extends('layouts.app')
@section('title','Jugadores')
@section('content')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Foto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Posicion</th>
                <th scope="col">Equipo</th>
                <th scope="col">Numero</th>
                <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($arrayJugadores as $key => $jugador)
            <tr>
                <td><img src="{{$jugador['foto']}}"/></td>
                <td>{{$jugador['nombre']}}</td>
                <td>{{$jugador['posicion']}}</td>
                <td>{{$jugador['equipo']}}</td>
                <td>{{$jugador['numero']}}</td>
                <td>
                    <a href="/jugadores/{{$key}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><i class="far fa-eye"></i></a>
                    <a href="/jugadores/{{$key}}/edit" class="btn btn-success btn-lg active" role="button" aria-pressed="true"><i class="fas fa-pen"></i></a>
                    <a href="#" class="btn btn-danger btn-lg active" role="button" aria-pressed="true"><i class="far fa-trash-alt"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
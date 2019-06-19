@extends('layouts.app')
@section('title','Jugador')
@section('content')

<form action="/jugadores" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" >
    </div>
    <div class="form-group">
        <label for="posicion">Posicion</label>
        <select name="posicion" id="posicion" class="form-control">
            <option value="0">Seleccione...</option>
        @foreach($arrayPosiciones as $posicion)
            <option value="{{$posicion['id']}}">{{$posicion['nombre']}}</option>
        @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="numero">Numero</label>
        <input type="number" class="form-control" id="numero" name="numero">
    </div>
    <div class="form-group">
        <label for="equipo">Equipo</label>
        <input type="text" class="form-control" id="equipo" name="equipo">
    </div>
    <div class="form-group">
        <label for="foto">Foto</label>
        <input type="file" class="form-control-file" id="foto" name="foto">
    </div>

    <button type="submit" class="btn btn-primary">Crear</button>
</form>

@endsection
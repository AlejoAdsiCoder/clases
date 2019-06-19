@extends('layouts.app')
@section('title','Equipos')
@section('content')

    <form action="{{url('/equipos')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" >
    </div>
    <div class="form-group">
        <label for="dt">D.T</label>
        <input type="text" class="form-control" id="dt" name="dt">
    </div>
    <div class="form-group">
        <label for="escudo">Escudo</label>
        <input type="file" class="form-control-file" id="escudo" name="escudo">
    </div>

    <button type="submit" class="btn btn-primary">Crear</button>
    </form>

@endsection
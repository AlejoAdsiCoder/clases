@extends('layouts.app')
@section('title','Equipos')
@section('content')
    <div class="row">
        @foreach($arrayEquipos as $key => $equipo)
        <div class="col-xs-6 col-sm-4 col-md-3  text-center">
            <a href="{{ url('equipos/' . $key)}}">
                <img src="{{$equipo['escudo']}}"/>
                <h4>{{$equipo['nombre']}}</h4>
            </a>
        </div>
        @endforeach
    </div>
@endsection

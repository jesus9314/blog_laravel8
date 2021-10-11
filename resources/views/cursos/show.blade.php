@extends('layouts.plantilla')

@section('title', 'Show '.$curso)

@section('content')
    <h1>Bienvenido al curso {{$curso->name}} </h1>
    <a href="{{route('cursos.index')}}">volver a cursos</a>
    <p><strong>{{$curso->categoria}}</strong></p>
    <p>{{$curso->descripcion}}</p>
@endsection

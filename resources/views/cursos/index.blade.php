@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>Bienvenido a la pagina cursos</h1>
    <a href="{{route('cursos.create')}}">Crear curso</a>
    <br>
    <ul>
        @foreach ($cursos as $curso)
            <a href="{{route('cursos.show', $curso->id)}}"><li>{{$curso->name}}</li></a>
        @endforeach
    </ul>
    {{$cursos->links();}}
@endsection

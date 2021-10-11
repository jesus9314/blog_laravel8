@extends('layouts.plantilla')

@section('title', 'Cursos Create')

@section('content')
    <h1>En esta página podrás crear cursos</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Descripción:
            <br>
            <textarea name="descripcion" id="" cols="30" rows="5"></textarea>
        </label>
        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria">
        </label>
        <br>
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection

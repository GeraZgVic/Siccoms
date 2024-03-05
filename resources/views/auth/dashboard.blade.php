@extends('layout.auth')

@section('titulo')
    Dashboard
@endsection

@section('contenido')
<h2 class="font-extrabold text-4xl text-center my-6">Hola {{auth()->user()->name}}, ¿Qué quieres administrar?</h2>

@endsection

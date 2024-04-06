@extends('layout.auth')

@section('titulo')
    Dashboard
@endsection

@section('contenido')
    
    <livewire:formulario-edit-post :articulos=$articulos :postId=$postId />
    
@endsection
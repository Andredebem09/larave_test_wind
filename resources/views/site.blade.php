@extends('layout')

@section('corpo')

<div class="corpo">

    <p>crie sua duvida abaixo:</p>

    <a href="{{ route('index.create')}}">criar duvida</a>
    
    <br>
    
    <a href="{{route('index.consulta')}}">consulta resultados banco</a>
    
    <br>
    
    
    <a href="{{ route('andre.laravel')}}">curso laravel</a>
    
    
    <p>links para paginas:</p>

    <a href="{{route('index.banco')}}">dados de professor</a>

    <br>

    
    <a href="{{ route('local.banco')}}">acessar banco de dados</a>
    
    
    
    <p>entrar em contato:</p>

    <a href="{{route('index.formulario')}}">entrar em contato</a>


</div>

@endsection

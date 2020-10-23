@extends('layout')
@section('titulo-pagina')
A minha APP
@endsection
@section('header')
Bem-vindo
@endsection
@section('conteudo')
<h2>Esta é a minha primeira web App em Laravel</h2>
<p>Para que conste... estou a usar um controller</p>
<img src="{{asset('imagens/messi.jpg')}}">

@endsection
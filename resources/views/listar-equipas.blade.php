@extends('layout')
@section('titulo-pagina')
Equipas do torneio
@endsection
@section('header')
Equipas
@endsection
@section('conteudo')
@foreach($equipas as $equipa)
	<h2>{{$equipa}}</h2>
@endforeach
<p>Está tudo</p>

@endsection	
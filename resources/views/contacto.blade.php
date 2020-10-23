@extends('layout')
@section('titulo-pagina')
Contactos
@endsection
@section('header')
Fale connosco
@endsection
@section('conteudo')
	<!--aqui fica o form -->
	<form method="post" action="{{route('processar.form')}}">
		@csrf
	<label for="nome">Nome</label>
	<input type="text" name="nome">
	<label for="morada">morada</label>
	<input type="text" name="morada">	
	<label for="automovel">Automovel</label>
	<select name="automovel">
		<option value="volvo">Volvo</option>
		<option value="saab">Saab</option>
		<option value="mercedes">Mercedes</option>
		<option value="Audi">Audi</option>
	</select>	
	<button type="submit">enviar</button>
	</form>
@endsection	
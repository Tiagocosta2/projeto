<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('titulo-pagina')</title>
	 <link rel="stylesheet" href="{{asset('css/all.css')}}">
</head>
<body>
	<h1>A minha web App em Laravel</h1>
	<h2>@yield('header')</h2>
	@yield('conteudo')
	<div class="menu-rodape">
		<h2>Opções de navegação</h2>
		<a href="{{route('equipas.index')}}">Inicio</a>
		<a href="{{route('equipas.lista')}}">ver equipas</a>
		<i class="fas fa-trash"></i>
	</div>
	<script src="{{asset('js/all.js')}}"></script>
</body>
</html>
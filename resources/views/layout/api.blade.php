@extends('template.consumir')
@section('deploy')
<article class="post">
	<header>
		<div class="title">
			<h2><a>Consumo de api</a></h2>			
		</div>
	</header>			
	@foreach($pasar as $item)
	<p>Nombre: {{$item['Nombre']}} <br>Genero: {{$item['Genero']}} Probabilidad: {{$item['Probabilidad']}} Contador: {{$item['Contador']}}</p>
	@endforeach
</article>
@endsection
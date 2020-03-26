<table border="1">
		<tr>
			<td>Nombre Disco</td>
			<td>Grupo</td>
			<td>Precio</td>
			<td>Canciones</td>
		</tr>

		@foreach($discos as $disco)
			<tr>
					<td>{{ $disco->nombre }}</td>
					<td>{{ $disco->grupo }}</td>
					<td>{{ $disco->precio }}</td>
					<td>{{ $disco->canciones }}</td>
			</tr>	
		@endforeach

	</table>

	<br><br><br>

	<a href="/">Pulsa aquí para volver</a>
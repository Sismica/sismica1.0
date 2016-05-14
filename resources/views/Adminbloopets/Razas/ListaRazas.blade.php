@extends('Layouts.AdminMain')
@section('content')

	<table class="table">
		<thead>
			<th>ID</th>
			<th>RAZAS</th>
			<th>OPCIONES</th>
		</thead>
		<tbody>
			@foreach($razas as $raza)
			<td>{{$raza->id}}</td>
			<td>{{$raza->raza}}</td>
			<td><div class="btn-group">
  			<button type="button" class="btn btn-default">Acciones</button>
	  			<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    			<span class="caret"></span>
	    				<span class="sr-only">Toggle Dropdown</span>
	  			</button>
				  <ul class="dropdown-menu">
				    <li>{{link_to_route('welcomeAdmin.Razas.edit', $title = 'Modificar', $parameters = $raza->id)}} </li>
				    <li><a href="#">Eliminar</a></li>

				  </ul>
			</div>
		<!-- <td>{{ --></td>

		</tbody>
			@endforeach
	</table>
@endsection
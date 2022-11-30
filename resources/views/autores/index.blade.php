@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col d-flex justify-content-center">
				<h1 class="text-center text-white">Autores</h1>
			</div>
			@can('crear-autor')
			<div class="row d-flex justify-content-center">
				<div class="col-6 d-flex justify-content-center">
					<a href="autores/create" class="btn btn-dark mt-3 mb-3">Cargar nuevo autor</a>
				</div>
			</div>
			@endcan
			<div class="row d-flex justify-content-center">
				<div class="col-5 d-flex justify-content-center">
					<table class="table table-bordered text-white">
              			<thead class="thead-dark">
			                <tr>
			                  <th>No.</th>
			                  <th>Nombre</th>
			                  <th>Apellido Paterno</th>
			                  <th>apellido Materno</th>
			                  <th>Opciones</th>
			                </tr>
              			</thead>
	              		<tbody>
			              @foreach($autores as $datos)
			                <tr>
			                  <th>{{$loop->index+1}}</th>
			                  <td>{{$datos->nombre}}</td>
			                  <td>{{$datos->apellidoPaterno}}</td>
			                  <td>{{$datos->apellidoMaterno}}</td>
			                  <td>
			                  	<div class="row d-flex justify-content-center">
			                  		@can('editar-autor')
			                  		<div class="col-6 d-flex justify-content-center">
			                  			<a class="btn btn-dark" href="{{route('autores.edit',$datos->id)}}">Editar</a>
			                  		</div>
			                  		@endcan
			                  		@can('borrar-autor')
			                  		<div class="col-6 d-flex justify-content-center">
			                  			<form action="{{route('autores.destroy',$datos->id)}}" method="post">
			                          		@csrf
			                          		@method('delete')
			                          		<button class="btn btn-dark" type="submit">Borrar</button>
			                      		</form>
			                  		</div>
			                  		@endcan
			                  	</div>
			                  </td>
			                </tr>
			              @endforeach
			            </tbody>
            		</table>
				</div>
			</div>
		</div>

	</div>
@endsection
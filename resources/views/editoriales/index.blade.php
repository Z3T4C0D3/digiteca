@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col d-flex justify-content-center">
				<h1 class="text-center text-white">Editoriales</h1>
			</div>
			<div class="row d-flex justify-content-center">
				@can('crear-editorial')
				<div class="col-6 d-flex justify-content-center">
					<a href="editoriales/create" class="btn btn-dark mt-3 mb-3">Cargar nueva editorial</a>
				</div>
				@endcan
			</div>
			<div class="row d-flex justify-content-center">
				<div class="col-5 d-flex justify-content-center">
					<table class="table table-bordered text-white">
              			<thead class="thead-dark">
			                <tr>
			                  <th>No.</th>
			                  <th>Editorial</th>
			                  <th>Opciones</th>
			                </tr>
              			</thead>
	              		<tbody>
			              @foreach($editoriales as $datos)
			                <tr>
			                  <th>{{$loop->index+1}}</th>
			                  <td>{{$datos->nombreEditorial}}</td>
			                  <td>
			                  	<div class="row d-flex justify-content-center">
			                  		@can('editar-editorial')
			                  		<div class="col-6 d-flex justify-content-center">
			                  			<a class="btn btn-dark" href="{{route('editoriales.edit',$datos->id)}}">Editar</a>
			                  		</div>
			                  		@endcan
			                  		@can('borrar-editorial')
			                  		<div class="col-6 d-flex justify-content-center">
			                  			<form action="{{route('editoriales.destroy',$datos->id)}}" method="post">
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
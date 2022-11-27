@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col d-flex justify-content-center">
				<h1 class="text-center text-white">Categorias</h1>
			</div>
			<div class="row d-flex justify-content-center">
				<div class="col-6 d-flex justify-content-center">
					<a href="categorias/create" class="btn btn-dark mt-3 mb-3">Cargar nueva categoria</a>
				</div>
			</div>
			<div class="row d-flex justify-content-center">
				<div class="col-5 d-flex justify-content-center">
					<table class="table table-bordered text-white">
              			<thead class="thead-dark">
			                <tr>
			                  <th>No.</th>
			                  <th>Categoria</th>
			                  <th>Opciones</th>
			                </tr>
              			</thead>
	              		<tbody>
			              @foreach($categorias as $datos)
			                <tr>
			                  <th>{{$loop->index+1}}</th>
			                  <td>{{$datos->nombreCategoria}}</td>
			                  <td>
			                  	<div class="row d-flex justify-content-center">
			                  		<div class="col-6 d-flex justify-content-center">
			                  			<a class="btn btn-dark" href="{{route('categorias.edit',$datos->id)}}">Editar</a>
			                  		</div>
			                  		<div class="col-6 d-flex justify-content-center">
			                  			<form action="{{route('categorias.destroy',$datos->id)}}" method="post">
			                          		@csrf
			                          		@method('delete')
			                          		<button class="btn btn-dark" type="submit">Borrar</button>
			                      		</form>
			                  		</div>
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
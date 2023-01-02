@extends('layouts.app')
@section('content')
<script>
    $(document).ready(function() {
        // Select2 Multiple
        $('.select2-multiple').select2({
            placeholder: "Select",
            allowClear: true
        });
    });
</script>
<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="col d-flex justify-content-center">
			<h1 class="text-center text-white">Agregar un nuevo libro</h1>
		</div>
	</div>
	<div class="row d-flex justify-content-center">
		<div class="col-8 d-flex justify-content-center">
			@if ($errors->any())                                                
                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                <strong>¡Revise los campos!</strong>                        
                    @foreach ($errors->all() as $error)                                    
                        <span class="badge badge-danger">{{ $error }}</span>
                    @endforeach                        
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
             @endif
			{!! Form::open(array('route'=>'libros.store','method'=>'POST'))!!}
                    <div class="row">
                        
	                    <div class="row d-flex justify-content-center">
	                    	<div class="col-8">
	                            <div class="form-group">
	                                <label for="" class="text-white">Titulo del libro</label>
	                                {!! Form::text('Titulo',null,array('class'=>'form-control')) !!}
	                            </div>
	                    	</div>
	                    </div>
	                    
	                   <div class="row d-flex justify-content-center">
	                   		<div class="col-8">
	                            <div class="form-group">
	                                <label for="" class="text-white">Codigo del libro</label>
	                                {!! Form::text('Codigo',null,array('class'=>'form-control')) !!}
	                            </div>
	                    	</div>
	                   </div>

	                    <div class="row d-flex justify-content-center">
	                    	<div class="col-8">
	                            <div class="form-group">
	                                <label for="" class="text-white">Categoria del libro</label>
	                               	<select name=" idCategoria" id=" idCategoria" class="form-control">
	                               		<option value="" selected>Selecciona una opcion</option>
	                               		@foreach($categorias as $categoria)
	                               		<option value="{{$categoria->id}}">{{$categoria->nombreCategoria}}</option>
	                               		@endforeach
	                               	</select>
	                            </div>
	                    	</div>
	                    </div>

	                    <div class="row d-flex justify-content-center">
	                    	<div class="col-8">
	                            <div class="form-group">
	                                <label for="" class="text-white">Editorial del libro</label>
	                               	<select name=" idEditorial" id=" idEditorial" class="form-control">
	                               		<option value="" selected>Selecciona una opcion</option>
	                               		@foreach($editoriales as $editorial)
	                               		<option value="{{$editorial->id}}">{{$editorial->nombreEditorial}}</option>
	                               		@endforeach
	                               	</select>
	                            </div>
	                    	</div>
	                    </div>

	                    <div class="row d-flex justify-content-center">
	                    	<div class="col-8">
	                            <div class="form-group">
	                                <label for="" class="text-white">Autores del libro</label>
	                               	<select class="select2-multiple form-control" name="idAutor[]" multiple="multiple" id="idAutor">
                                            @foreach($autores as $autor)
                                                <option value="{{$autor->id}}">{{$autor->nombre}} {{$autor->apellidoPaterno}} {{$autor->apellidoMaterno}}</option>
                                            @endforeach
                                    </select>
	                            </div>
	                    	</div>
	                    </div>

	                    <div class="row d-flex justify-content-center">
	                    	<div class="col-8">
	                            <div class="form-group">
	                                <label for="" class="text-white">Numero de copias del libro</label>
	                                {!! Form::number('num_copia',null,array('class'=>'form-control')) !!}
	                            </div>
	                    	</div>
	                    </div>

	                    <div class="row d-flex justify-content-center">
	                    	<div class="col-8">
	                            <div class="form-group">
	                                <label for="" class="text-white mt-3">Imagen del libro</label>
	                                {!! Form::file('file',null,array('class'=>'form-control')) !!}
	                            </div>
	                    	</div>
	                    </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-4">
                            <button type="submit" class="btn btn-dark">Guardar</button>
                        </div>
                    </div>
                </div>
            {!! Form::close()!!}
		</div>
	</div>
</div>
@endsection
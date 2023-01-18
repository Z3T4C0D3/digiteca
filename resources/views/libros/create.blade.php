@extends('layouts.app')
@section('content_header')
    <h1>
        
    </h1>
@stop
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-3" style="background-color: aquamarine">	
			</div>
			<div class="col">
				<div class="card">
					<div class="card-header bg-gray">
						<h1>Agregar nuevo libro</h1>
					</div>
					<div class="card-body">
						{!! Form::open(['route'=>'libros.store', 'autocomplete' => 'off', 'files' => 'true']) !!}
							
							@include('libros.partials.form')
							
							{!! Form::submit('Agregar Libro', 
							['class' => 'btn btn-primary']) !!}
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@stop
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.5%;
            
        }
        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;

        }
		

    </style>
@section('js')
	
    
    
	
@stop
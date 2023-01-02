@extends('layouts.app')

@section("autores")
    active
@endsection
@section("content")
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col d-flex justify-content-center">
                <h1 class="text-center text-white">Cargar nuevo autor</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-4 d-flex justify-content-center">
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
                {!! Form::open(array('route'=>'autores.store','method'=>'POST'))!!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="">Nombre</label>
                                {!! Form::text('nombre',null,array('class'=>'form-control')) !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="">Apellido Paterno</label>
                                {!! Form::text('apellidoPaterno',null,array('class'=>'form-control')) !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="">Apellido Materno</label>
                                {!! Form::text('apellidoMaterno',null,array('class'=>'form-control')) !!}
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
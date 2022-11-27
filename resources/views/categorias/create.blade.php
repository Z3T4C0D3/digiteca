@extends('layouts.app')

@section("autores")
    active
@endsection
@section("content")
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col d-flex justify-content-center">
                <h1 class="text-center text-white">Cargar nueva categoria</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-4 d-flex justify-content-center">
                {!! Form::open(array('route'=>'categorias.store','method'=>'POST'))!!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="">Nombre</label>
                                {!! Form::text('nombreCategoria',null,array('class'=>'form-control')) !!}
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
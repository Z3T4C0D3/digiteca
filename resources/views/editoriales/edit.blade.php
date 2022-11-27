@extends('layouts.app')

@section("autores")
    active
@endsection
@section("content")
   <div class="container">
       <div class="row d-flex justify-content-center">
           <div class="col"><h1 class="text-center text-white">Editar</h1></div> 
       </div>
       <div class="row d-flex justify-content-center">
           <div class="col-4 d-flex justify-content-center">
               {!! Form::model($editoriale, ['method' => 'PATCH','route' => ['editoriales.update', $editoriale->id]]) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="">Nombre</label>
                                {!! Form::text('nombreEditorial',null,array('class'=>'form-control')) !!}
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-4">
                            <button type="submit" class="btn btn-dark">Guardar</button>
                        </div>
                    </div>
                </div>
               {!! Form::close() !!}
           </div>
       </div>
   </div>           
@endsection
@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">Index Libros</h1>
    <div class="row d-flex justify-content-center">
        <div class="col d-flex justify-content-center">
            <a href="libros/create" class="btn btn-dark">Nuevo libro</a>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
                <div class="col-5 d-flex justify-content-center">
                    <table class="table table-bordered text-white">
                        <thead class="thead-dark">
                            <tr>
                              <th>No.</th>
                              <th>Titulo</th>
                              <th>Codigo</th>
                              <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($libros as $datos)
                            <tr>
                              <th>{{$loop->index+1}}</th>
                              <td>{{$datos->Titulo}}</td>
                              <td>{{$datos->Codigo}}</td>
                              <td>
                                <div class="row d-flex justify-content-center">
                                    @can('editar-editorial')
                                    <div class="col-6 d-flex justify-content-center">
                                        <a class="btn btn-dark" href="{{route('libros.edit',$datos->id)}}">Editar</a>
                                    </div>
                                    @endcan
                                    @can('borrar-editorial')
                                    <div class="col-6 d-flex justify-content-center">
                                        <form action="{{route('libros.destroy',$datos->id)}}" method="post">
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
</body>
</html>
@endsection
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
    <div class="container">
        <div class="row">
            <div 
            class="
                col-5 
                border border-dark 
                rounded 
                d-flex 
                justify-content-center" 
            style="background-color: aquamarine">

                <img class="
                    mb-2 mt-2 
                    rounded
                    border border-dark border-5" 
                src="img/Digi.png">
            </div>

            <div 
            class="
                col
                border border-dark
                rounded
                ms-1
                card
                "
            style="background-color: cadetblue">
                <div class="
                    card-header 
                    text-center
                    rounded
                    border border-white
                    mt-2
                    mb-1
                    bg-dark
                    text-white">
                    <h3>Ultimo agregado</h3>
                </div>
                <div class="
                    card-body
                    border border-dark
                    mb-2
                    rounded
                    bg-white"></div>
            </div>
        </div>
    </div>
    <div class="container mt-4 border border-dark rounded">
        <div class="row">
            <div class="col-span-5 bg-white rounded">
                <h2>Libros</h2>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
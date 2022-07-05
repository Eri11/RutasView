@extends('layout')

@section('titulo','Productos')


@section('contenido')

    <h1>Productos</h1>

    <ul>
        @isset($productos)
        
            @foreach ($productos as $productositem)
                <li>{{$productositem['i']}}</li>
            @endforeach

        @else
        <li> No hay elementos para mostrar </li>
        @endisset
    </ul>

@endsection
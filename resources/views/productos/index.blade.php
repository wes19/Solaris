@extends('layouts.app')

@section('title', 'Productos')

@section('content')
    <h1>Productos</h1>
    <ul>
        @foreach($productos as $producto)
            <li>
                <a href="{{ route('productos.show', $producto->id) }}">{{ $producto->producto }}</a>
            </li>
        @endforeach
    </ul>
@endsection
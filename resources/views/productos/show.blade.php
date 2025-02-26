@extends('layouts.app')

@section('title', $producto->name)

@section('content')
    <h1 class="text-2xl font-bold mb-4">{{ $producto->producto }}</h1>
    <img src="/storage/{{$producto->imagen}}" class="w-20 bg-slate-950 mb-4" alt="{{ $producto->producto }}">
    <p class="text-gray-700 mb-4">Ruta de la imagen: {{ Voyager::image($producto->imagen) }}</p>
    <p class="text-gray-700 mb-4">{!! $producto->descripcion !!}</p>
    <p class="text-gray-700 mb-4">Precio: {{ $producto->valor }}</p>
    <div class="bg-slate-800 p-4 rounded">
        <p class="text-white">
            ESTE TEXTO ES PARA MODIFICAR EL ARCHIVO show.blade.php
        </p>
    </div>
@endsection
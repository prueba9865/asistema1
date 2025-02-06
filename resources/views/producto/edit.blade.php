@extends('layout/template')

@section('title', 'Editar producto')

@section('content')

<form action="{{url('/productos/edit/' . $id)}}" method="POST">
    @method("PUT")
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $producto->descripcion }}">
    </div>

    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" name="precio" id="precio" class="form-control" value="{{ $producto->precio }}">
    </div>
    
    <button type="submit" class="btn btn-primary">Editar</button>
</form>
@endsection
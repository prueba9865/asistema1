@extends('layout/template')

@section('title', 'Nuevo producto')

@section('content')

<form action="{{url('/productos')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control">
    </div>

    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" name="precio" id="precio" class="form-control">
    </div>
    
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
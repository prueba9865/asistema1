<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <!-- Incluir el CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Lista de Productos</h1>

        <!-- Tabla con estilo Bootstrap -->
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Código</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Existencia</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Iterar sobre la lista de productos y mostrarlos en la tabla -->
                @foreach($lista as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->codigo }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ number_format($producto->precio, 2) }} €</td>
                    <td>{{ $producto->existencia }}</td>
                    <td>
                        <form action="{{ url('/productos/'. $producto->id) }}" method="post">
                            @method("DELETE")
                            @csrf
                            <button type="submit">Eliminar</button>
                        </form>
                        <a href="{{ url('/productos/edit/'. $producto->id) }}">Editar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

        </table>
    </div>

    <!-- Incluir el JS de Bootstrap para interactividad (si se necesita) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
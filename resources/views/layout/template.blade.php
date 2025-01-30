<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlace al CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Enlace al JS de Bootstrap (opcional, pero recomendado para interacciones dinámicas) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <title>@yield('title')</title>
</head>
<body>
    <main>
    <div class="container py-4">
    @yield('content')
    <footer class="pt-3 mt-4 text-muted border-top">
        Instituto Juan Bosco
    </footer>
    </div>
</main>
</body>
</html>
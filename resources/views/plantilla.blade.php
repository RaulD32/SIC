<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        .wrapper {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <header class="bg-primary text-white text-center py-4">
            <h1>Sistema Integral De Calificaciones</h1>
        </header>
        <main class="container mt-4" style="color: black">
            @yield('contenido')
        </main>
    </div>
    <footer class="bg-dark text-white text-center py-3">
        Todos los derechos reservados @2024, Díaz Kauil SM53
    </footer>

    <!-- Scripts de Bootstrap (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

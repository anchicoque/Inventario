<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi primera Pagina en Laravel</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header>
        <h1>hola mundo desde el layout</h1>
    </header>
    <nav>
        <ul>
            
            <li><a href="{{ route('home') }}">home</a></li>
            <li><a href="{{ route('calculadora') }}">calculadora</a></li>
            <li><a href="{{ '/' }}">welcome</a></li>
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        <h3>
            Pie de pagina desde el layout
        </h3>
    </footer>
</body>
</html>
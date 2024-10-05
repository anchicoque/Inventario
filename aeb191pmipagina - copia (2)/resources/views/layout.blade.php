<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi primera Pagina en Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header>
        <h1>hola mundo desde el layout</h1>
    </header>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">Acerca de</a></li>
            <li><a href="{{ route('blog.index') }}">Blog</a></li>
            <li><a href="{{ route('contact') }}">Contatos</a></li>
            <li><a href="{{ route('calculadora') }}">calculadora</a></li>
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
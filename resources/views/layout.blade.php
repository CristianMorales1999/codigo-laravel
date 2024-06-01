<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="/"></a>Home</li>
            <li><a href="nosotros">Nosotros</a></li>
            <li><a href="servicios">Servicios</a></li>
            <li><a href="contacto">Contacto</a></li>
        </ul>
    </nav>
</body>

<!-- Agregamos la directiva para agregar contenido dinamico-->
@yield('content')
</html>
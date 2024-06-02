<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        .activo a{
            color:red;
            text-decoration: underline;
        }
    </style>

</head>
<body>
    <nav>
        <table class="table">
            <thead class="table table-bordered">
                <tr>
                    <th scope="col" class="{{ request()->routeIs('home')? 'activo':''}}"><a href="/">Home</a></th>
                    <th scope="col"><a href="nosotros">Nosotros</a></th>
                    <th scope="col"><a href="servicios">Servicios</a></th>
                    <th scope="col"><a href="contacto">Contacto</a></th>
                </tr>
            </thead>
        </table>
    </nav>

    <!-- Agregamos la directiva para agregar contenido dinamico-->
    @yield('content')
</body>
</html>
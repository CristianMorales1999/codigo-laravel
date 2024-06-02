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
    <!--{{ dump(request()->routeIs('servicios'))}}--> <!--Este metodo devuelve true o false dependiendo de si coincide o no con la ruta mandada por parametro-->
    <!--{{ dump(request()->route()->getName()) }}--><!--Este metodo devuelve el nombre de la ruta en la que nos encontramos-->

        <table class="table">
            <thead class="table table-bordered">
                <tr>
                    <th scope="col" class="{{ request()->routeIs('home')? 'activo':''}}"><a href="/">Home</a></th>
                    <th scope="col" class="{{ request()->routeIs('nosotros')? 'activo':''}}"><a href="nosotros">Nosotros</a></th>
                    <th scope="col" class="{{ request()->routeIs('servicios.index')? 'activo':''}}"><a href="servicios">Servicios</a></th>
                    <th scope="col" class="{{ request()->routeIs('contacto')? 'activo':''}}"><a href="contacto">Contacto</a></th>
                </tr>
            </thead>
        </table>
    </nav>

    <!-- Agregamos la directiva para agregar contenido dinamico-->
    @yield('content')
</body>
</html>
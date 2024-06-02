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
            @include('partials.nav')
        </table>
        <!-- Agregamos la directiva para agregar contenido dinamico-->
        @yield('content')
    </nav> 
</body>
</html>
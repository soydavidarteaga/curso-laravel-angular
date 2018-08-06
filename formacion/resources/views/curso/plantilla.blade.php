<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
</head>
<body>
    @yield('contenido')
    <footer>
        <p>@yield('instituto')</p>
        <p>Rif: @yield('rif')</p>
        <p>Email: @yield('correo')</p>
    </footer>
</body>
</html>
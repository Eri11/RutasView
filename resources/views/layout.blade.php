<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo','UTCH')</title>
    <style>
        .active{
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>

        <nav> 
            <li class={{request()->routeIs('home')}} ? 'active': ''> <a href="/">Home </a> </li>
            <li class={{request()->routeIs('contacto')}} ? 'active': ''> <a href="/contacto">Contactos </a> </li>
            <li class={{request()->routeIs('productos')}} ? 'active': ''> <a href="/productos">Productos </a> </li>

        </nav>    

@yield('contenido')

    <h2>Estoy dentro del layout</h2>


</body>
</html>
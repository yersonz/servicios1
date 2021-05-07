<!DOCTYPE html>
<html lang="es">
<head >
    <title>SISTEMA SERVICIOS PROFESIONALES</title>
    <meta charset="utf-8" />
    <meta name="description" content="Debe contener las palabras clave, tratar de atraer clicks y de longitud entre 150 y 160 caracteres">
    <link rel="stylesheet" href="../css/app.css" />
    <style>
        .actual{
            color: #1a202c;
            font-weight: bold;
        }
    </style>
</head>

<body class="container">
<br>
<nav  class="navbar-dark">
    <a  href="/ingreso-proveedor" class="actual">Ingresar Proveedor</a>
    <a href="/mostrar-proveedor" class="actual">Mostrar Proveedor</a>
    <a href="/ingreso-usuario" class="actual">Ingresar Usuario</a>
    <a href="/mostrar-usuario" class="actual">Mostrar Usuario</a>
</nav>
<header class="container">
    <h1>SERVICIOS PROFESIONALES</h1>
</header>
<section>
    @yield("contenido")
</section>
</body>
</html>


<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Pokemon Учитель</title>
        <style>
            body { font-family: system-ui; background: #2d2d2dff; padding: 2rem; color:#ffffffff }
            h1 { color: #ffffffff; }
            .card { background: #2d2d2dff; padding: 1rem; margin: 1rem 0; border-radius: 10px; }
            a { display: inline-block; margin: .3rem 0; color: #0077cc; text-decoration: none; }
            a:hover { text-decoration: underline; }
        </style>
    </head>
    <body>
        <a href="sesion/destruir_sesion.php">Destruir sesion</a>
        <!--Учитель es maestro en ruso-->
        <h1>Pokemon Учитель</h1>
        <p>Web no oficial de venta de cartas Pokemon</p>

        <div class="card">
            <h2>Menu cutre principal</h2>
            <a href="/interaccion/catalogo.php">Catalogo</a><br>
            <a href="leer_cookie.php">Leer cookie</a><br>
            <a href="actualizar_cookie.php">Actualizar cookie</a><br>
            <a href="borrar_cookie.php">Borrar cookie</a>
        </div>
    </body>
</html>
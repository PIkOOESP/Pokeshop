
<!DOCTYPE html>
<html lang="ees">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <body>
        <div class="botones">
            <a href="index.php">Inicio</a>
            <a href="cerrar_sesion.php">Cerrar Sesion</a>
            <a href="carrito.php">Carrito</a>
            <form action="../catalogo.php" method="post">
                <input type="hidden" name="cookie" value="<?php 
                if($_COOKIE["ilu"] == "claro"){
                    echo "oscuro";
                } else{
                    echo "claro";
                }
                ?>">
                <input type="submit" value="Cambiar Tema">
            </form>
        </div>
    </body>
</html>
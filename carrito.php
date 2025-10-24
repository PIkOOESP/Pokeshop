<?php
session_start();
include("include/cartas.php");
include("include/header.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>

</head>
<body>
    <div class="carrito_titulo">
        <h2>Carrito</h2>
    </div>

    <div>
        <ul>
            <?php
                foreach($_SESSION['cesta'] as $llave){
                    foreach($cartas as $key){
                        if($key['id'] == $llave['id']){
                            echo "<li>" . $key['nombre'].", Tipo:" . $key['tipo'] . " Precio:" . $key['precio'] . " Cantidad:" . $llave['cantidad'] . "</li>";
                        }
                    }
                }
            ?>
        </ul>
    </div>

</body>
</html>
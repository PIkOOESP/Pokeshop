<?php
session_start();
include("../datos/cartas.php");
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body { font-family: system-ui; background: #2d2d2dff; padding: 2rem; color: #ffffffff; }
            .card { background: #1b1b1bff; padding: 1rem; margin: 1rem 0; border-radius: 10px; }
            img{ background-color: #2d2d2dff; border-radius: 10px ;}
        </style>
        <title>Catalogo</title>
    </head>
    <body>
        <a href="../index.php">Inicio</a>
        <h1>Catalogo completo de la tienda</h1>
        <p>Aqui se puede ver el catalogo integro de la tienda</p>
        <div class="card">
            <ul>
                <?php 
                    foreach($cartas as $key){
                        echo '<li>Nombre: ' . $key['Nombre'] . ' || Puntos de salud: ' . $key['PS'] . ' || Coste de retirada: ' . $key['Coste'] . '<a href="guardar_cesta.php?id=' . $key['id'] . '"><img src="https://images.icon-icons.com/606/PNG/512/shopping-cart-add-button_icon-icons.com_56132.png" width="40px" ></a></li>
                        ';
                    }
                ?>
            </ul>
        </div>
    </body>
</html>
<?php
session_start();
include("include/cartas.php");
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body { 
                font-family: system-ui; 
                background: #2d2d2dff; 
                padding: 2rem; 
                color: #ffffffff;
            }
            .carta{
                width: 225px;
                height: 400px;
                border: 1px #ffffffff solid;
                border-radius: 20px;
                text-align: center;
                float:left;
                margin-right: 35px;
            }


            .carta a {
                text-decoration: none;
                color: #ffffffff;
            }

            img{
                width: 130px;
                border-radius: 20px;
                padding-top: 25px;
            }
        </style>
        <title>Catalogo</title>
    </head> 
    <body>
        <a href="index.php">Inicio</a>
        <a href="cerrar_sesion.php">Cerrar Sesion</a>
        <a href="carrito.php">Carrito</a>
        
        <h1>Catalogo completo de la tienda</h1>
        <p>Aqui se puede ver el catalogo integro de la tienda</p>
        <?php 
            foreach($cartas as $key){
                echo '<div class="carta">
                    <a href="detalles.php?id='. $key['id'] .'"> 
                        <img src="imagenes/' . $key['id'] . '.jpg">
                        <p><b>' . $key['nombre'] . '</b></p>
                        <p>' . $key['tipo'] . '</p>
                        <p>' . $key['precio'] . '</p>
                    </a>
                </div>
                ';
            }
        ?>
    </body>
</html>
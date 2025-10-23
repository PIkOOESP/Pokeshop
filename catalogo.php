<?php
session_start();
include("include/cartas.php");

if(isset($_POST['cookie']) && !empty($_POST['cookie'])){
    setcookie("ilu", $_POST['cookie']);
} else {
    setcookie("ilu", true);
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body { 
                font-family: system-ui; 
                background: <?php echo $_COOKIE['ilu'] ? "#2d2d2dff" : "#c2c1c1ff" ?> ;
                padding: 2rem; 
                color:<?php echo $_COOKIE['ilu'] ? "#ffffff" : "#000000" ?>;
            }

            .carta{
                width: 225px;
                height: 400px;
                border: 1px <?php echo $_COOKIE['ilu'] ? "#ffffff" : "#000000" ?> solid;
                border-radius: 20px;
                text-align: center;
                float:left;
                margin-right: 35px;
                background-color: <?php echo $_COOKIE['ilu'] ? "#3c3c3c" : "#e0e0e0" ?>;
            }

            .carta a {
                text-decoration: none;
                color: <?php echo $_COOKIE['ilu'] ? "#ffffff" : "#000000" ?>;
            }

            img{
                width: 130px;
                border-radius: 20px;
                margin-top:20px ;
            }

            .botones a {
                display: inline-block;
                margin-right: 20px;
                padding: 8px 16px;
                border-radius: 10px;
                font-weight: 600;
                text-decoration: none;
                transition: all 20s ease;
                background-color: <?php echo $_COOKIE['ilu'] ? "#3c3c3c" : "#e0e0e0" ?>;
                color: <?php echo $_COOKIE['ilu'] ? "#ffffff" : "#000000" ?>;
                border: 1px solid <?php echo $_COOKIE['ilu'] ? "#ffffff33" : "#00000033" ?>;
            }

            .botones a:hover {
                background-color: <?php echo $_COOKIE['ilu'] ? "#505050" : "#d0d0d0" ?>;
                transform: scale(1.05);
            }
        </style>
        <title>Catalogo</title>
    </head> 
    <body>
        <div class="botones">
            <a href="index.php">Inicio</a>
            <a href="cerrar_sesion.php">Cerrar Sesion</a>
            <a href="carrito.php">Carrito</a>
            <form action="catalogo.php" method="post">
                
            </form>
        </div>
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
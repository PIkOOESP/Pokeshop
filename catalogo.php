<?php
session_start();
include("include/cartas.php");
include("include/header.php");

if(!empty($_POST["cookie"])){
    setcookie("ilu", $_POST["cookie"],time()+(60 * 60 * 24 * 7));
    header("Location:catalogo.php");
}

$temario = $_COOKIE['ilu'] ?? "claro";

if ($temario == "claro") {
    $tema = false;
} else {
    $tema = true;
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
                background: <?php echo $tema ? "#2d2d2dff" : "#c2c1c1ff" ?> ;
                padding: 2rem; 
                color:<?php echo $tema ? "#ffffff" : "#000000" ?>;
            }

            .carta{
                width: 225px;
                height: 400px;
                border: 1px <?php echo $tema ? "#ffffff" : "#000000" ?> solid;
                border-radius: 20px;
                text-align: center;
                float:left;
                margin-right: 35px;
                background-color: <?php echo $tema ? "#3c3c3c" : "#e0e0e0" ?>;
            }

            .carta a {
                text-decoration: none;
                color: <?php echo $tema ? "#ffffff" : "#000000" ?>;
            }

            img{
                width: 130px;
                border-radius: 20px;
                margin-top:20px ;
            }

            a.guardar_carrito{
                display: inline-block;
                padding: 8px 16px;
                border-radius: 10px;
                font-weight: 600;
                text-decoration: none;
                transition: all 1s ease;
                background-color: <?php echo $tema ? "#3c3c3c" : "#e0e0e0" ?>;
                color: <?php echo $tema ? "#ffffff" : "#000000" ?>;
                border: 1px solid <?php echo $tema ? "#ffffff33" : "#00000033" ?>;
            }

            a.guardar_carrito:hover{
                background-color: <?php echo $tema ? "#505050" : "#d0d0d0" ?>;
                transform: scale(1.05);
            }

            .botones a, input[type="submit"] {
                display: inline-block;
                margin-right: 20px;
                padding: 8px 16px;
                border-radius: 10px;
                font-weight: 600;
                text-decoration: none;
                transition: all 1s ease;
                background-color: <?php echo $tema ? "#3c3c3c" : "#e0e0e0" ?>;
                color: <?php echo $tema ? "#ffffff" : "#000000" ?>;
                border: 1px solid <?php echo $tema ? "#ffffff33" : "#00000033" ?>;
            }

            .botones a:hover, input[type="submit"]:hover {
                background-color: <?php echo $tema ? "#505050" : "#d0d0d0" ?>;
                transform: scale(1.05);
            }
        </style>
        <title>Catalogo</title>
    </head> 
    <body>
        <h1>Catalogo completo de la tienda</h1>
        <p>Aqui se puede ver el catalogo integro de la tienda</p>

        <?php 
            foreach($cartas as $key){
                echo '<div class="carta">
                    <a href="detalle.php?id='. $key['id'] .'"> 
                        <img src="imagenes/' . $key['id'] . '.jpg">
                        <p><b>' . $key['nombre'] . '</b></p>
                        <p>' . $key['tipo'] . '</p>
                        <p>' . $key['precio'] . '€</p>
                    </a>
                    <a class="guardar_carrito" href = "guardar_cesta.php?id=' . $key['id'] . '">Guardar en el carrito</a>
                </div>
                ';
            }
        ?>
    </body>
</html>
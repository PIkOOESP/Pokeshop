<?php
session_start();
include("include/cartas.php");
include("include/header.php");

if(isset($_GET["id"]) && is_numeric($_GET['id'])){
    $id = $_GET['id'];

    foreach($cartas as $key){
        if ($key['id'] == $id ){
            $carta = $key;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $carta['nombre'] ?></title>
    <style>
        .imagen-detalle {
            width: 250px;
            float: left;
            padding: 20px;
        }

        .cuerpo-detalle {
            margin-top: 20px;
            width: 400px;
            float: left;
            padding: 20px;
            background-color: <?php echo $tema ? "#2d2d2dff" : "#c2c1c1ff" ?>;
            border: 1px solid <?php echo $tema ? "#ffffff33" : "#00000033" ?>;
            border-radius: 20px;
        }

        .cuerpo-detalle h1 {
            font-size: 2rem;
            color:<?php echo $tema ? "#ffffff" : "#000000" ?>;
            margin-bottom: 10px;
        }

        .cuerpo-detalle p {
            font-size: 1.1rem;
            color:<?php echo $tema ? "#ffffff" : "#000000" ?>;
            margin: 10px 0;
        }

        .imagen-detalle img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        a.guardar-carrito{
            display: inline-block;
            padding: 8px 16px;
            border-radius: 10px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.1s ease;
            background-color: <?php echo $tema ? "#3c3c3c" : "#e0e0e0" ?>;
            color: <?php echo $tema ? "#ffffff" : "#000000" ?>;
            border: 1px solid <?php echo $tema ? "#ffffff33" : "#00000033" ?>;
        }

        a.guardar-carrito:hover{
            background-color: <?php echo $tema ? "#505050" : "#d0d0d0" ?>;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="imagen-detalle">
        <img src="imagenes/<?php echo $carta['id']; ?>.jpg" alt="<?php $carta['nombre'] ?>">
    </div>
    <div class="cuerpo-detalle">
        <h1><?php echo $carta['nombre']; ?></h1>
        <p><b><?php echo $carta['tipo'] ?></b></p>
        <p><?php echo $carta['descripcion'] ?></p>
        <br>
        <a class="guardar-carrito" href="guardar_cesta.php?id=<?php echo $carta['id'] ?>"><p><?php echo $carta['precio'] ?>€</p></a>
    </div>
    
</body>
</html>
<?php
session_start();
include("include/cartas.php");
include("include/header.php");

if(isset($_POST['borrar'])){
    unset($_SESSION['cesta']);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <style>
        .carrito-lista {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .carrito-item {
            display: flex;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid <?php echo $tema ?"#c2c1c1ff" : "#2d2d2dff"  ?>;
            border-radius: 8px;
            background-color: <?php echo $tema ? "#2d2d2dff" : "#c2c1c1ff" ?>;
        }

        .carrito-imagen {
            width: 100px;
            object-fit: cover;
            margin-right: 15px;
            border-radius: 8px;
        }

        .carrito-detalle {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .producto-nombre {
            font-size: 18px;
            font-weight: bold;
            color:<?php echo $tema ? "#ffffff" : "#000000" ?>;
            margin-bottom: 5px;
        }

        .producto-tipo, .producto-precio, .producto-cantidad {
            font-size: 14px;
            color:<?php echo $tema ? "#cfcfcfff" :"#4d4d4dff" ?>;
            margin-bottom: 3px;
        }

        .carrito-vacio {
            font-size: 18px;
            color: #e74c3c;
            font-weight: bold;
            text-align: center;
            margin-top: 50px;
        }

    </style>
</head>
<body>
    
    <form action="" method="post">
        <input type="hidden" name="borrar">
        <input type="submit" value="Borrar carrito">
    </form>
    <div class="carrito_titulo">
        <h2>Carrito</h2>
    </div>

    <div>
        <?php
            if (isset($_SESSION['cesta'])) {
                $total = 0;
                echo '<ul class="carrito-lista">';
                foreach ($_SESSION['cesta'] as $llave) {
                    foreach ($cartas as $key) {
                        if ($key['id'] == $llave['id']) {
                            echo "<li class='carrito-item'>
                                    <img src='imagenes/" . $key['id'] . ".jpg' alt='" . $key['nombre'] . "' class='carrito-imagen'>
                                    <div class='carrito-detalle'>
                                        <h4 class='producto-nombre'>" . $key['nombre'] . "</h4>
                                        <p class='producto-tipo'>Tipo: " . $key['tipo'] . "</p>
                                        <p class='producto-precio'>Precio: " . $key['precio'] . "€</p>
                                        <p class='producto-cantidad'>Cantidad: " . $llave['cantidad'] . "</p>
                                    </div>
                                </li>";
                            $total += ($key['precio']*$llave['cantidad']);
                        }
                    }
                }
                echo "<li class='carrito-item'>Total de la compra: " . $total . "€</li>";
                echo '</ul>';
            } else {
                echo "<p class='carrito-vacio'>Tu carrito está vacío</p>";
            }
        ?>
    </div>

</body>
</html>
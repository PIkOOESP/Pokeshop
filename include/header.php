<?php
if(!isset($_SESSION['user']) || empty($_SESSION['user'])){
    header('Location:../index.php');
}

if(!empty($_POST["cookie"])){
    setcookie("tema", $_POST["cookie"],time()+(60 * 60 * 24 * 7));
    header("Location: " . $_SERVER['HTTP_REFERER']);
}

$temario = $_COOKIE['tema'] ?? "claro";

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

        .botones a, input[type="submit"]{
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

        form.cookie{
            display:inline-block;
        }
    </style>
</head>
    <body>
        <div class="botones">
            <a href="index.php">Inicio</a>
            <a href="cerrar_sesion.php">Cerrar Sesion</a>
            <a href="carrito.php">Carrito</a>
            <form action="" method="post" class="cookie">
                <input type="hidden" name="cookie" value="<?php 
                if($_COOKIE["tema"] == "claro"){
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
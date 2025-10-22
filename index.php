<?php
session_start();

if(isset($_POST['user']) && !empty($_POST['user'])){
    $_SESSION['user'] = $_POST['user'];
}

if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
    header("Location:catalogo.php");
}

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Pokeshop</title>
        <style>
            body {background: #2d2d2dff; color: #ffffffff }
        </style>
    </head>
    <body>
        <div class="login">
            <div class="login_titulo">
                <h1>Tienda de cartas Pokemon</h1>
            </div>
            <div class="login_cuerpo">
                <form action="index.php" method="post">
                    <label for="user">Usuario</label>
                    <input type="text" name="user" id="user">

                    <input type="submit" value="Entrar">
                </form>    
            </div>
        </div> 
    </body>
</html>
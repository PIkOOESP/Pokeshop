<?php
session_start();
$contador = 0;
$confirmacion = 0;

// Crea el array en la variable sesion cesta
if(!isset($_SESSION["cesta"])){
    $_SESSION["cesta"] = [];
}
// Introduce el primer valor
if (empty($_SESSION["cesta"])) {
    array_push($_SESSION["cesta"], array("cesta_id" => uniqid(), "id" => $_GET["id"], "cantidad" => 1));
} else {
    // Busca si ya se ha añadido en la cesta
    foreach ($_SESSION["cesta"] as $key) {
        if(strcmp($key['id'], $_GET['id']) == 0) {
            //Si se ha añadido, busca el valor en el array de la sesion para sumarle 1 cantidad
            while(count($_SESSION['cesta']) > $contador) {
                if($_SESSION['cesta'][$contador]['cesta_id'] == $key['cesta_id']){
                    $_SESSION['cesta'][$contador]['cantidad']++;
                    break;
                }
                $contador++;
            }
            $confirmacion = 1;
        } 
    }
    if($confirmacion != 1){
        array_push($_SESSION['cesta'],array("cesta_id" => uniqid(), "id" => $_GET["id"], "cantidad" => 1) );
    }
}


header('Location:catalogo.php')
?>

<title>Añadir cesta</title>
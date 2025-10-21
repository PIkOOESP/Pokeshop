<?php
session_start();
$contador = 0;

if(!isset($_SESSION["cesta"])){
    $_SESSION["cesta"] = [];
}

if (empty($_SESSION["cesta"])) {
    array_push($_SESSION["cesta"], array("cesta_id" => uniqid(), "id" => $_GET["id"], "cantidad" => 1));
} else {
    foreach ($_SESSION["cesta"] as $key) {
        if(strcmp($key['id'], $_GET['id']) == 0) {
            while(count($_SESSION['cesta']) > $contador) {
                print_r($contador);
                if($_SESSION['cesta'][$contador]['cesta_id'] == $key['cesta_id']){
                    $_SESSION['cesta'][$contador]['cantidad']++;
                }
                $contador++;
            }
        } else{
            array_push($_SESSION['cesta'],array("cesta_id" => uniqid(), "id" => $_GET["id"], "cantidad" => 1) );
        }
    }
}


header('Location:catalogo.php')
?>

<title>Añadir cesta</title>
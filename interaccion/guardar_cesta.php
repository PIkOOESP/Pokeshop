<?php
include("catalogo.php");
include("../datos/cartas.php");

$_SESSION['cesta'] .= $_GET['id'];
?>

<title>Añadir cesta</title>
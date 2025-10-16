<?php
session_start();
$_SESSION['cesta'].=$_GET['id'];

header('Location:/catalogo.php')
?>

<title>Añadir cesta</title>
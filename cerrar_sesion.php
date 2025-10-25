<?php
$temario = $_COOKIE['tema'] ?? "claro";
if ($temario == "claro") {
    $tema = false;
} else {
    $tema = true;
}
session_start();
if(session_destroy()){
    echo "<div>
    <img src='https://pa1.aminoapps.com/7256/62339a7ceb605d402d6b0b73933552e2eb6e6f95r1-499-374_hq.gif' alt='Despedida' width='800px'>
    <p>Hasta pronto</p>   
    ";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5;url=index.php">
    <title>Adios</title>
    <style>
        body{
            background-color: <?php echo $tema ? "#2d2d2dff" : "#c2c1c1ff" ?>;
            color:<?php echo $tema ? "#ffffff" : "#000000" ?>;
        }

        div{
            text-align: center;
        }
        
        img{
            border-radius: 20px;
        }
    </style>
</head>
<body>
    
</body>
</html>
<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGENTE</title>
</head>
<body>
    <?php
    if ($_SESSION['perfil']=="agente") {
        echo "<h1>Bienvenido " . $_SESSION['nombre'] . "</h1>";
        echo "<a href='agente.php'>Home</a>";
        echo "<a href='nuevamulta.php'>Gestion de multas</a>";
        echo "<a href='salir.php'>Salir</a>";
        echo "<a href='logout.php'>Logout</a>";
    } else {
        header("Location: index.php");
    }
    ?>
</body>
</html>
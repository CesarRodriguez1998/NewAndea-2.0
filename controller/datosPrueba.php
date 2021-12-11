<?php

include('dbConnect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dashboard/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <?php


    session_start();
        if (isset($_SESSION['roles_idroles'])) {
            echo "<ul class='navbar-nav px-3'>";
            echo "<li class='nav-item text-nowrap'>";
            echo "<a href='closeSesion.php' class='nav-link'>Cerrar Sesion</a>";
            echo "</li>";
            echo "</ul>";
        }
    ?>

    <table>
        <tr>
            <td>ID</td>
            <td>USUARIO</td>
            <td>CONTRASEÑA</td>
            <td>ROL</td>
        </tr>
    <?php
        $sql = "SELECT * FROM login";
        $result = mysqli_query($conexion, $sql);

        while($mostrar = mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $mostrar['idlogin'] ?></td>
        <td><?php echo $mostrar['usuario'] ?></td>
        <td><?php echo $mostrar['contraseña'] ?></td>
        <td><?php echo $mostrar['roles_idroles'] ?></td>
    </tr>
    <?php
        }
    ?>
    </table>
</body>
</html>
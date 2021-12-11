<?php

include('controller/dbConnect.php');

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
            <td>asdas</td>
        </tr>
    <?php
        $sql = "SELECT * FROM usuario";
        $result = mysqli_query($conexion, $sql);

        while($mostrar = mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $mostrar['nombre'] ?></td>
        <td><?php echo $mostrar['apellido'] ?></td>
        <td><?php echo $mostrar['contraseña'] ?></td>
        <td><?php echo $mostrar['correo'] ?></td>
        <td><?php echo $mostrar['telefono'] ?></td>
    </tr>
    <?php
        }
    ?>
    </table>
    <div> 
    <p>Seleccione un pais del siguiente menú:</p>
    <p>Paises:
      <select>
        <option value="0">Seleccione:</option>
        <?php
          $sql = ("SELECT * FROM roles");
          $result = mysqli_query($conexion, $sql);
          while ($valores = mysqli_fetch_array($result)) {
            echo '<option value="'.$valores['idroles'].'">'.$valores['nomRol'].'</option>';
          }
        ?>
      </select>
</body>
</html>
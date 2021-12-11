<?php
    include('dbConnect.php');
    $check = $_POST['check'];
    $hola = 'Carlos';
    mysqli_query($conexion, "UPDATE usuario SET nombre = '$hola' WHERE idusuario = 1");
    mysqli_close($conexion);
?>
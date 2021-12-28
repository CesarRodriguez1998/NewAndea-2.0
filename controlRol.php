<?php

include("controller/dbConnect.php");


if (isset($_POST['subir'])) {
$holamu = $_REQUEST['ver'];
$holam = $_REQUEST['vr'];
$idrol = $_POST['nombre'];

switch ($holam) {
    case '4':
        $sql = "UPDATE usuario SET roles_idroles = '".$holam."' WHERE idusuario = '".$idrol."' ";
        $result = mysqli_query($conexion, $sql);
        break;
    case '3':
        $sql = "UPDATE usuario SET roles_idroles = '".$holam."' WHERE idusuario = '".$idrol."' ";
        $result = mysqli_query($conexion, $sql);
    break;
    
    default:
        # code...
        break;
}

switch ($holamu) {
    case '0':
        $sql = "UPDATE usuario SET usuHabilitado = '".$holamu."' WHERE idusuario = '".$idrol."' ";
        $result = mysqli_query($conexion, $sql);
        break;
    case '1':
        $sql = "UPDATE usuario SET usuHabilitado = '".$holamu."' WHERE idusuario = '".$idrol."' ";
        $result = mysqli_query($conexion, $sql);
        break;
    
    default:
        # code...
        break;
}




header('location: panel.php');
}

?>
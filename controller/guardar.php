<?php

include('dbConnect.php');

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$insert = "INSERT INTO login (usuario, contraseña) VALUES ('$usuario', '$contraseña')";



$query = mysqli_query($conexion, $insert);

if($query){

    echo "Correcto";

}else{
    echo "Incorrecto";
}

//Usar checkbox
if (isset($_REQUEST['suma'])){
    $suma = $_REQUEST['n1'] + $_REQUEST['n2'];
    echo "El resultado es: $suma";
}


?>

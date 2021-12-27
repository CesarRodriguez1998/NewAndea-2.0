<?php
include('dbConnect.php');

if(!isset($_SESSION)) 
{ 
  session_start(); 
}

$correo = $_SESSION['correo'];
$nomCurso = $_GET['nomCurso'];

$consulta = "SELECT idusuario FROM usuario WHERE correo = '$correo'";
$re = mysqli_query($conexion, $consulta);
$fila = mysqli_fetch_array($re);
$usuId = $fila['idusuario'];
echo $usuId; 


if($nomCurso != null){
  $sql = "INSERT INTO cursos (nombre, usuario_idusuario) VALUES ('".$nomCurso."', '".$usuId."')";
  mysqli_query($conexion, $sql);
  header('location: ../Crear Curso2.php');
}

?>
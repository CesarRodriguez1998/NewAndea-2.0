<?php
include('dbConnect.php'); 
$id = $_GET['id'];
$sql = "DELETE FROM temas WHERE idtemas = '".$id."'";
mysqli_query($conexion, $sql);
header('location:../Crear Curso.php');

?>
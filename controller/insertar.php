<?php
include('dbConnect.php');
include('insertarTemas.php');

if(isset($_POST['enviar'])){

/*   if(file_exists($_FILES['pdf']['tmp_name'])){
    if(move_uploaded_file($_FILES['pdf']['tmp_name'], 'controller/'.$_FILES['pdf']['name'])){
      echo "Cargado con exito";
    }else{
      echo "No se";
    }
    
  }else{
    echo "Fallo!!!!!!";
  } */

  $idcursos;
  $nomTema = $_POST['nomTema'];
  $lkrs = $_POST['lkrs'];
  $lkgoo = $_POST['lkgoo'];
  $lkgit = $_POST['lkgit'];
  $ncs = $_POST['ncs'];
  // Código

  if($nomTema != null || $lkrs != null || $lkgoo != null || $lkgit != null || $ncs != null){
    $sql = "INSERT INTO temas (nomTema,linkROnline, colab, linkGit, cursos_idcursos) VALUES ('".$nomTema."', '".$lkrs."', '".$lkgoo."', '".$lkgit."', '".$ncs."')";
    mysqli_query($conexion, $sql);
    header('location: ../Crear Curso2.php');
  } 
}




?>
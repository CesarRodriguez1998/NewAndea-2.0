<?php
include('dbConnect.php');

$nomTema = $_GET['nomTema'];
$lkrs = $_GET['lkrs'];
$lkgoo = $_GET['lkgoo'];
$lkgit = $_GET['lkgit'];
$ncs = $_GET['ncs'];
if($nomTema != null || $lkrs != null || $lkgoo != null || $lkgit != null || $ncs != null){
    $sql = "INSERT INTO temas (nomTema,linkROnline, colab, linkGit, cursos_idcursos) VALUES ('".$nomTema."', '".$lkrs."', '".$lkgoo."', '".$lkgit."', '".$ncs."')";
    mysqli_query($conexion, $sql);
    header('../Crear Curso.php');
                  
}

?>
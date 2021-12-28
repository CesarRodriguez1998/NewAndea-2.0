<?php
    include("dbConnect.php");
    $idcursos1 = $_POST['idCurso'];
    $idp = $_POST['id'];
    $nomTema = $_POST['nomTema'];
    $lkrs = $_POST['lkrs'];
    $lkgoo = $_POST['lkgoo'];
    $lkgit = $_POST['lkgit'];
    if($nomTema != null || $lkrs != null || $lkgoo != null || $lkgit != null || $idcursos1 != null){
        $sql1 = "UPDATE temas SET nomTema = '".$nomTema."', linkROnline = '".$lkrs."', colab = '".$lkgoo."', linkGit = '".$lkgit."', cursos_idcursos = '".$ncs."' WHERE idtemas = '".$idcursos1."' ";
        mysqli_query($conexion, $sql1);
        header('location:../Crear Curso2.php');
    }
?>
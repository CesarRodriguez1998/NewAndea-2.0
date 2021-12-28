<?php
include('dbConnect.php');
$idtemas = $_GET['id'];
$idcursos1 = $_GET['idCurso'];
$sql = "SELECT * FROM temas WHERE idtemas ='".$idtemas."'";
$result = mysqli_query($conexion, $sql);
while($mostrar = mysqli_fetch_assoc($result)) {


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Andea-Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <link href="dashboard/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="dashboard/dashboard.css" rel="stylesheet">
  </head>
<body>
<br>
<div>
<div class="table-responsive">
            <form>
                <input type="hidden" name="id" value="<?php echo $mostrar['idtemas'] ?>">
                <input type="hidden" name="idCursos" value="<?php echo $mostrar['cursos_idcursos'] ?>">
                <input type="text" class="form-control" id="validationCustom03" placeholder="Link a RStudio online" name="nomTema" value="<?php echo $mostrar['nomTema']?>"><br>
                <input type="text" class="form-control" id="validationCustom03" placeholder="Link a RStudio online" name="lkrs" value="<?php echo $mostrar['linkROnline']?>"><br>
                <input type="text" class="form-control" id="validationCustom05" placeholder="Link a Google Colab" name="lkgoo" value="<?php echo $mostrar['colab'] ?>"><br>
                <input type="text" class="form-control" id="validationCustom05" placeholder="Link a Git" name="lkgit" value="<?php echo $mostrar['linkGit'] ?>"> <br>
                <button type="submit" href="controller/editar.php?id=<?php echo $mostrar['idtemas']?>&idCurso=<?php echo $mostrar["idcursos"] ?> name=" class="btn btn-success">Actualizar</button>
                <?php echo "<a href='../Crear Curso2.php' class='btn btn-danger'>Regresar</a>"; ?>
            </form>

</div>
<?php } ?>
<?php
  error_reporting (0);
    $idp = $_GET['id'];
    $cursos = $_GET['idCursos'];
    $nomTema = $_GET['nomTema'];
    $lkrs = $_GET['lkrs'];
    $lkgoo = $_GET['lkgoo'];
    $lkgit = $_GET['lkgit'];
    if($nomTema != null || $lkrs != null || $lkgoo != null || $lkgit != null || $cursos != null){
        $sql1 = "UPDATE temas SET nomTema = '".$nomTema."', linkROnline = '".$lkrs."', colab = '".$lkgoo."', linkGit = '".$lkgit."', cursos_idcursos = '".$cursos."' WHERE idtemas = '".$idp."' ";
        mysqli_query($conexion, $sql1);
        header('location:../Crear Curso2.php');
    }
?>

</body>
</html>
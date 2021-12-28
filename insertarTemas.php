<?php
session_start();
//Seguridad de session de las paginas.
include('controller/dbConnect.php');

$idcursos = $_GET['id'];
$consulta = "SELECT nombre FROM cursos WHERE idcursos = '$idcursos'";
$re = mysqli_query($conexion, $consulta);
$fila = mysqli_fetch_array($re);
$nom = $fila['nombre'];

if(!isset($_SESSION['roles_idroles'])){
  header("location: login.php");
}else{
  if ($_SESSION['roles_idroles'] != 3) {
    header("location: index.php");
  }
}

?>

<!doctype html>
<html lang="es">
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
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">

      <a class="navbar-brand col-md-2 col-lg-2 me-0 px-3" href="index.php">Andea</a>

      <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php
					if (isset($_SESSION['roles_idroles'])) {
						echo "<div class='header_side d-flex flex-row justify-content-center align-items-center color: cornsilk;'>";
						echo "<li class='main_nav_item' color: cornsilk; ><a href='controller/closeSesion.php'>Cerrar sesion</a></li>";
						echo "</div>";
 					}else{
						echo "<div class='header_side d-flex flex-row justify-content-center align-items-center color: cornsilk;'>";
						echo "<li class='main_nav_item' color: cornsilk; ><a href='login.php'>Iniciar sesion</a></li>";
						echo "</div>";
					}
				?>
    </header>
    <br>
    <div class="container-fluid">
      <div class="row">
      
          <div class="table-responsive">
            <form action="controller/insertar.php" method="POST" id="formulario" enctype="multipart/form-data">
              <input type="text" class="form-control" id="validationCustom03" placeholder="Nombre Curso" name="nomCurso" value="<?php echo $nom?>"><br>
              <input type="text" class="form-control" id="validationCustom02" placeholder="Nombre del tema" name="nomTema" ><br>
              <input type="text" class="form-control" id="validationCustom03" placeholder="Link a RStudio online" name="lkrs" ><br>
              <input type="text" class="form-control" id="validationCustom05" placeholder="Link a Google Colab" name="lkgoo" ><br>
              <input type="text" class="form-control" id="validationCustom05" placeholder="Link a Git" name="lkgit" > <br>
              <input type="file" class="form-control" id="validationCustom05" placeholder="Cargar Pdf" name="pdf" > <br>
              <input type="number" style="display: none;" class="form-control" id="validationCustom05" placeholder="Numero Cruso" value="<?php echo $idcursos?>" name="ncs" > <br>
              <button type="submit" name="enviar" id="cargar" class="btn btn-success">Cargar</button>
              <a class="btn btn-danger" href="Crear Curso2.php">Regresar</a>
            </form>

              </tbody>
            </table>
          </div>

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Nombre del tema</th>
                  <th>linkROnline</th>
                  <th>colab</th>
                  <th>linkGit</th>
                  <th>pdf</th>
                </tr>
              </thead>

              <tbody>
                <p>

                </p>
                <?php
                  $sql = "SELECT * FROM temas
                  INNER JOIN cursos ON temas.cursos_idcursos = cursos.idcursos WHERE cursos.nombre = '$nom'";
                  $result = mysqli_query($conexion, $sql);
                  
                  while($mostrar = mysqli_fetch_assoc($result)){
                    
                ?>
                <tr>
                  <td style="display: none;"><?php echo $mostrar['idtemas']?></td>
                  <td style="display: none;"><?php echo $mostrar['idcursos']?></td>
                  <td><?php echo $mostrar['nomTema']?></td>
                  <td><?php echo $mostrar['linkROnline'] ?></td>
                  <td><?php echo $mostrar['colab'] ?></td>
                  <td><?php echo $mostrar['linkGit'] ?></td>
                  <td>
                    <a class="btn btn-success" href="controller/editar.php?id=<?php echo $mostrar['idtemas']?>&idCurso=<?php echo $mostrar["idcursos"] ?>">Editar</a>
                    <?php echo "<a href='controller/delete.php?id= $mostrar[idtemas]' class='btn btn-danger'>Eliminar</a>";
                    ?>
                  </td>
                  <?php
                    
                    }
                    
                  ?>
              </tbody>
            </table>
          </div>
    
<!--           <div class="col-12">
            <button class="btn btn-primary" type="submit">Guardar</button>
          </div> -->
        </main>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="dashboard/assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard/dashboard.js"></script>
  </body>
</html>
<?php

//Seguridad de session de las paginas.
include('controller/dbConnect.php');
session_start();

if(!isset($_SESSION['roles_idroles'])){
  header("location: login.php");
}else{
  if ($_SESSION['roles_idroles'] != 3) {
    header("location: index.php");
  }
}
$hola = "false"; 
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
      <p style="color: #FFFFFF; font-size: 20px;">
      <?php
          $correo = $_SESSION['correo'];
          echo "Bienvenido {$correo}.";

        ?>
      </p>
      
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

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link  active" href="Crear curso.php">
                  <span data-feather="home"></span>
                  Crear Curso
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="N vistas.php">
                  <span data-feather="bar-chart-2"></span>
                  Numero de vistas
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            
          </div>

          <div class="table-responsive">
            <h1>CREAR CURSO</h1>
            <form action="controller/insertarCurso.php" method="" id="formulario">
            <?php
                  $sql = "SELECT * FROM usuario";
                  $result = mysqli_query($conexion, $sql);
                ?>
              <input type="text" class="form-control" id="validationCustom02" placeholder="Nombre del tema" name="nomCurso" ><br>
              <button type="submit" href="controller/insertarCurso.php" name="enviar" id="cargar" class="btn btn-success">Crear</button>
            </form>

              </tbody>
            </table>
          </div>

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Nombre del curso</th>
                  <th>Agregar temas, editar, Eliminar</th>
<!--                   <th>linkROnline</th>
                  <th>colab</th>
                  <th>linkGit</th> -->
                </tr>
              </thead>

              <tbody>
                <?php
                  $sql = "SELECT * FROM cursos";
                  $result = mysqli_query($conexion, $sql);
                  
                  while($mostrar = mysqli_fetch_assoc($result)){
                    
                ?>
                <tr>
                  <td style="display: none;"><?php echo $mostrar['idcursos']?></td>
                  <td><?php echo $mostrar['nombre']?></td>
                  <td>
                    <a class="btn btn-success" href="insertarTemas.php?id=<?php echo $mostrar['idcursos']?>">Agregar Temas</a>
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

<?php
//Seguridad de sesion de las paginas.
include('controller/dbConnect.php');
session_start();
error_reporting(0);

if(!isset($_SESSION['roles_idroles'])){
  header("location: login.php");
}else{
  if ($_SESSION['roles_idroles'] != 2) {
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
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

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
  
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="controller/closeSesion.php">Cerrar Sesion</a>
        </li>
      </ul>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="panel.php">
                  <span data-feather="home"></span>
                  Principal
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="Estadisticas.php">
                  <span data-feather="bar-chart-2"></span>
                  Estadisticas
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="Sugerencias.php">
                  <span data-feather="file"></span>
                  Sugerencias
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <h2>Listado</h2>
          <select class="form-select" aria-label="Default select example">
            <option selected>Filtrar por</option>
            <option value="1">Todos</option>
            <option value="2">Aceptados</option>
            <option value="3">No Acectados</option>
            <option value="4">Creadores</option>
            <option value="5">No creadores</option>
          </select> 

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Correo</th>
                  <th>Telefono</th>
                  <th>Creador</th>
                  <th>Usuario</th>
                </tr>
              </thead>

              <tbody>
                <?php
                  $sql = "SELECT * FROM usuario";
                  $result = mysqli_query($conexion, $sql);

                  while($mostrar = mysqli_fetch_array($result)){
                ?>
                <tr>
                  <td><?php echo $mostrar['idusuario']?></td>
                  <td><?php echo $mostrar['nombre'] ?></td>
                  <td><?php echo $mostrar['apellido'] ?></td>
                  <td><?php echo $mostrar['correo'] ?></td>
                  <td><?php echo $mostrar['telefono'] ?></td>
                  <?php
                    $checked = '';
                    $checked1 = '';
                    $coco = $mostrar['idusuario'];
                                  
                    if($mostrar['usuHabilitado'] == 1)
                    {
                      $checked = 'checked="checked"';
                    }
                                                        
                    if($mostrar['roles_idroles'] == 3)
                    {
                      $checked1 = 'checked="checked"';
                    }
                      echo  '<td><div class="form-check form-switch">';
                      echo '<form method="POST" action="controlRol.php">';
                      echo '<input type="hidden" name="nombre" id="" value="'.$coco.'" checked>';
                      echo '<input type="hidden" name="vr" id="" value="4">';
                      echo '<input type="checkbox" class="form-check-input" name="vr" id="" value="3"  '.$checked1.'>';
                      echo '<input type="submit" class="btn btn-success" name="subir" value="Confirmar">';
                      echo '</form>';
                      echo  '</div></td>';
                  ?>
                  <?php

                      echo  '<td><div class="form-check form-switch">';
                      echo '<form method="POST" action="controlRol.php">';
                      echo '<input type="hidden" name="nombre" id="" value="'.$coco.'" checked>';
                      echo '<input type="hidden" name="ver" id="" value="0">';
                      echo '<input type="checkbox" class="form-check-input" name="ver" id="" value="0"  '.$checked.'>';
                      echo '<input type="checkbox" class="form-check-input" name="ver" id="" value="1"  '.$checked.'>';
                      echo '<input type="submit" class="btn btn-success" name="subir" value="Confirmar">';
                      
                      echo '</form>';
                      echo  '</div></td>';
                  ?>
                  <?php
                    }
                  ?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <script src="dashboard/assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard/dashboard.js"></script>
  </body>
</html>

<?php

include('controller/dbConnect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="Crear Curso.php">Nuevo</a>
<div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Correo</th>
                  <th>Telefono</th>
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
                  <td>
                      <a href="">Editar</a>
                      <a href="">Eliminar</a>
                  </td>
                  <?php
                    }
                  ?>
              </tbody>
            </table>
          </div>  
</body>
</html>
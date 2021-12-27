<?php

session_start();

if (isset($_SESSION['roles_idroles'])) {
  switch($_SESSION['roles_idroles']){
    case 1:
      header("");
    break;
    case 2:
      header("location: panel.php");
    break;
    case 3:
      header("location: Crear curso2.php");
    break;

    default:
  }
}

?>

<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login/css/style.css" />
    <title>Andea</title>
  </head>

  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="controller/validar.php" class="sign-in-form" method="post">
            <h2 class="title">Iniciar Sesión</h2>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Correo Electronico" name="correo" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" name="contraseña" />
            </div>

            <input type="submit" value="Ingresar" class="btn solid" />

            <?php
              if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true'){
                echo "<div style='color:red'>Correo o contraseña invalido - O no esta habilitado </div>";
              }
            ?>
            
          </form>

          <form action="#" class="sign-up-form">

            <h2 class="title">Registrar</h2>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nombre" />
            </div>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Apellido" />
            </div>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Correo Electronico" />
            </div>

            <div class="input-field">
              <i class="fas fa-school"></i>
              <input type="text" placeholder="Intitucion educatiba" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>       

            <input type="submit" class="btn" value="Crear cuenta" />

          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>No tienes cuenta?</h3>
            <p>
              Registrate fácil mente llenando los siguientes datos
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Registrar
            </button>
          </div>
          <img src="login/img/white_logo_transparent_background.png" class="image" alt="" />
        </div>

        <div class="panel right-panel">
          <div class="content">
            <h3>Ya tienes una cuenta?</h3>
            <p>
              Solo podras iniciar sesion hasta ser aprobado, esto se te notificara al correo electronico proporcionado.
            </p>

            <button class="btn transparent" id="sign-in-btn">
              Inicia sesión
            </button>
          </div>
          
          <img src="" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="login/js/app.js"></script>
  </body>
</html>

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
  
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Cerrar Sesion</a>
        </li>
      </ul>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="Crear Curso.php">
                  <span data-feather="home"></span>
                  Crear Curso
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Ver cursos.php">
                  <span data-feather="file"></span>
                  Ver Cursos
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
            <h1 class="h2">Listado de cursos creados</h1>
          </div>

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre del curso</th>
                  <th>N Temas</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>1</td>
                  <td>Nombre del curso</td>
                  <td>4</td>
                  <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Editar
                    </button>

                    

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-10000">
                        <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Nombre del curso</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                              <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Nombre del tema</th>
                                      <th>R online</th>
                                      <th>Google Colab</th>
                                      <th>Git</th>
                                      <th>PDF</th>
                                      <th>VSL</th>
                                      <th>Eliminar</th>
                                      <th>+ Temas</th>
                                    </tr>
                                  </thead>

                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td><input type="text" class="form-control" id="validationCustom02" placeholder="Nombre del tema" required></td>
                                      <td><input type="text" class="form-control" id="validationCustom03" placeholder="Link a RStudio online" required></td>
                                      <td><input type="text" class="form-control" id="validationCustom05" placeholder="Link a Google Colab" required></td>
                                      <td><input type="text" class="form-control" id="validationCustom05" placeholder="Link a Git" required></td>
                                      <td><button  class="btn btn-primary" type="submit">Cargar</button></td>
                                      <td>
                                        <div class="form-check form-switch">
                                          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                          </div>
                                      </td>
                                      <td><button type="button" class="btn btn-danger">-</button></td>
                                      <td><button type="button" class="btn btn-success">+</button></td>
                                    </tr>

                                    <tr>
                                      <td>2</td>
                                        <td><input type="text" class="form-control" id="validationCustom02" placeholder="Nombre del tema" required></td>
                                        <td><input type="text" class="form-control" id="validationCustom03" placeholder="Link a RStudio online" required></td>
                                        <td><input type="text" class="form-control" id="validationCustom05" placeholder="Link a Google Colab" required></td>
                                        <td><input type="text" class="form-control" id="validationCustom05" placeholder="Link a Git" required></td>
                                        <td><button  class="btn btn-primary" type="submit">Cargar</button></td>
                                        <td>
                                        <div class="form-check form-switch">
                                          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                          </div>
                                      </td>
                                        <td><button type="button" class="btn btn-danger">-</button></td>
                                        <td><button type="button" class="btn btn-success">+</button></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                              <button type="button" class="btn btn-primary">Guardar</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <td><button type="button" class="btn btn-danger">-</button></td>

                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>    
        </main>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="dashboard/assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard/dashboard.js"></script>
  </body>
</html>
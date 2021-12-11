<!doctype html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Datos</title>
  </head>

  <body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->

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
    <link href="form-validation.css" rel="stylesheet">
    <div class="container">
      <main>
        <div class="py-5 text-center">
          <img class="d-block mx-auto mb-4" src="images/logoandea.png" alt="" width="150" height="57">
          <h2></h2>
          <p class="lead">Por favor, Complete todas las casillas para terminar su inscripción. Los datos son recolectados para fines estadisticos para mejorar el contenido ofrecido.</p>
        </div>

        <div class="row g-5">
 
          <form class="needs-validation" novalidate>
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="firstName" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>

                <div class="invalid-feedback">
                  Nombre requerido.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Apellido requerido.
                </div>
              </div>

              <div class="col-6">
                <label for="email" class="form-label">Correo <span class="text-muted"></span></label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                  Correo requerido.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Apellido requerido.
                </div>
              </div>

              <div class="col-md-3">
                <label for="country" class="form-label">Nivel de educación</label>

                <select class="form-select" id="country" required>
                  <option value="">Seleccionar</option>
                  <option>Primaria</option>
                  <option>Secundaria</option>
                  <option>Tecnica</option>
                  <option>Pregrado</option>
                  <option>Posgrado</option>
                  <option>Otra</option>
                </select>

                <div class="invalid-feedback">
                  Campo obligatorio.
                </div>
              </div>

              <div class="col-md-6">
                <label for="country" class="form-label">Institución</label>
                <select class="form-select" id="country" required>
                  <option value="">Seleccionar</option>
                </select>
                <div class="invalid-feedback">
                  Campo obligatorio.
                </div>
              </div>

              <div class="col-md-3">
                <label for="country" class="form-label">Cargo</label>
                <select class="form-select" id="country" required>
                  <option value="">Seleccionar</option>
                  <option>Estudiante</option>
                  <option>Docente</option>
                  <option>Otro ¿cual?</option>
                </select>
                <div class="invalid-feedback">
                  Campo obligatorio.
                </div>
              </div>

              <div class="col-md-12">
                <label for="country" class="form-label">Carrera</label>
                <select class="form-select" id="country" required>
                  <option value="">Seleccionar</option>
                </select>

                <div class="invalid-feedback">
                  Campo obligatorio.
                </div>
              </div>

              <div class="col-md-3">
                <label for="country" class="form-label">Pais</label>
                <select class="form-select" id="country" required>
                  <option value="">Seleccionar</option>
                </select>
                <div class="invalid-feedback">
                  Campo obligatorio.
                </div>
              </div>

              <div class="col-md-6">
                <label for="country" class="form-label">Departamento</label>
                <select class="form-select" id="country" required>
                  <option value="">Seleccionar</option>
                </select>
                <div class="invalid-feedback">
                  Campo obligatorio.
                </div>
              </div>

              <div class="col-md-3">
                <label for="country" class="form-label">Ciudad</label>
                <select class="form-select" id="country" required>
                  <option value="">Seleccionar</option>
                </select>
                <div class="invalid-feedback">
                  Campo obligatorio.
                </div>
              </div>

              <hr class="my-4">
              <button class="w-100 btn btn-primary btn-lg" type="submit">Guardar</button>
            </div>
          </form>
        </div>
      </main>

      <footer class="my-5 pt-5 text-muted text-center text-small"></footer>
    </div>
  </body>
</html>
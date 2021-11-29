<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include_once 'pages/functions.php';
      $menu_option_setted = menu_options($menu,2);
    ?>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo texto('ChocoVal | Contacto') ?></title>
    <?php
      include_once 'pages/header.php';
    ?>
  </head>

  <body>
    <!-- opciones de menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
      <?php
        include_once 'pages/navigation.php';
      ?>
    </nav>

    <!-- Banner del sitio en la página principal -->
    <div class="container">
      <div class="row">
        <div class="col my-5 banner">
          <img class="mx-auto d-block w-15" src="img/logo.png" alt="logo" />
        </div>
      </div>
    </div>
    <!-- Contenido -->
    <div class="container main-content">
      <div id="contact" class="info">
        <h1 class="text-center mt-3"><?php echo ucfirst(texto('contacto')) ?></h1>
        <?php echo texto($descripcion)?>
        <div class="form-contact">
          <h3 class="text-center my-5"><?php echo ucfirst(texto('contacto',true)) ?></h3>
          <form id="frm-contact" action="form/contact.php" method="post" autocomplete="off">
            <!-- NOMBRE -->
            <div class="form-group row mb-3">
              <label for="name" class="col-md-4 form-control-label text-right">
                Nombre
              </label>
              <div class="input-group mb-3 w-50">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-user"></i>
                  </span>
                </div>
                <input type="text" class="form-control" name="name" placeholder="Escribe tu nombre" required aria-describedby="inputGroup-sizing-default">
              </div>
            </div>
            <!-- APELLIDO -->
            <div class="form-group row mb-3">
              <label for="lastname" class="col-md-4 form-control-label text-right">
                Apellido
              </label>
              <div class="input-group mb-3 w-50">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-user"></i>
                  </span>
                </div>
                <input type="text" class="form-control" name="lastname" placeholder="Escribe tu apellido" required aria-describedby="inputGroup-sizing-default">
              </div>
            </div>
            <!-- CORREO -->
            <div class="form-group row mb-3">
              <label for="name" class="col-md-4 form-control-label text-right">
                Correo Electrónico
              </label>
              <div class="input-group mb-3 w-50">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-envelope"></i>
                  </span>
                </div>
                <input type="email" class="form-control" name="email" placeholder="Escribe tu correo electrónico" required aria-describedby="inputGroup-sizing-default">
              </div>
            </div>
            <!-- TELEFONO -->
            <div class="form-group row mb-3">
              <label for="name" class="col-md-4 form-control-label text-right">
                Teléfono
              </label>
              <div class="input-group mb-3 w-50">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-phone"></i>
                  </span>
                </div>
                <input type="number" 
                  class="form-control" 
                  name="phone" 
                  placeholder="Escribe tu número de teléfono" 
                  aria-describedby="inputGroup-sizing-default"
                  max="9999999999"
                  required 
                >
              </div>
            </div>
            <!-- SELECT CIUDAD-->
            <div class="form-group row mb-3">
              <label for="name" class="col-md-4 form-control-label text-right">
                Ciudad
              </label>
              <div class="input-group mb-3 w-50">
                <select name="ciudad" class="form-control" required>
                  <option value="" disabled selected>Selecciona tu ciudad</option>
                  <option value="Cochabamba">Cochabamba</option>
                  <option value="Sucre">Sucre</option>
                  <option value="Tarija">Tarija</option>
                  <option value="Santa Cruz">Santa Cruz</option>
                  <option value="Beni">Beni</option>
                  <option value="Pando">Pando</option>
                  <option value="La Paz">La Paz</option>
                  <option value="Oruro">Oruro</option>
                  <option value="Potosi">Potosí</option>
                  
                </select>
              </div>
            </div>
            <!-- COMENTARIO -->
            <div class="form-group row mb-3">
              <label for="name" class="col-md-4 form-control-label text-right">
                Comentario
              </label>
              <div class="col-md-6">
                <textarea
                  name="comment"
                  class="form-control"
                  cols="30"
                  rows="10"
                  placeholder="Escribe aqui tu mensaje"
                  maxlength="200"
                  required
                ></textarea>
              </div>
            </div>
            <!-- SERVICIOS OFRECIDOS-->
            <div class="form-group row mb-3">
              <label for="name" class="col-md-4 form-control-label text-right">
                Servicios
              </label>
              <div class="input-group mb-3 w-50">
                <select name="servicios" class="form-control" multiple required>
                  <option value="" disabled selected>Seleccionar...</option>
                  <option value="envio">Formas de envio</option>
                  <option value="consulta">Consulta</option>
                  <option value="catalogo_precios">Lista de productos</option>
                </select>
              </div>
            </div>
            <!-- BTN ENVIAR FORM-->
            <div class="form-group row mb-3">
              <div class="col-md-12 text-center">
                <button class="btn btn-primary" type="submit">
                  <?php echo ucfirst(texto('enviar')) ?>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Pie -->
    <footer class="container-fluid pt-4 mt-md-5 pt-md-5 border-top bg-light">
      <?php
        include_once 'pages/footer.php'
      ?>
    </footer>

    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>

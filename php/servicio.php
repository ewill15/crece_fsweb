<!DOCTYPE html>
<html lang="en">
  <head>
  <?php 
    include_once 'pages/functions.php';
    $menu_option_setted = menu_options($menu,3);
  ?>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo texto('ChocoVal | Servicio') ?></title>
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
      <div id="service" class="info">
        <h1 class="text-center mt-3"><?php echo ucfirst(texto('servicio',true)) ?></h1>
        <?php echo texto($descripcion) ?>
        <?php echo texto($descripcion) ?> 
      </div>
      <!-- informacion de servicio -->
    </div>
    <!-- Pie -->
    <footer class="container-fluid pt-4 mt-md-5 pt-md-5 border-top bg-light">
      <?php
        include_once 'pages/footer.php'
      ?>
    </footer>

    <script src="js/bootstrap.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
  <?php 
    include_once 'pages/functions.php';
    $menu_option_setted = menu_options($menu);
  ?>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo texto('ChocoVal | Inicio') ?></title>
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
        <div class="col my-3 banner">
          <img class="mx-auto d-block w-15" src="img/logo.png" alt="logo" />
        </div>
      </div>
    </div>
    <!-- Contenido -->
    <div class="container main-content">
      <div id="start" class="info">
        <div class="my-5">
          <h2 class="text-center"><?php  ?></h2>
          <img class="mx-auto d-block w-15 my-5" src="img/treats.svg" alt="logo" />
          <?php texto($descripcion) ?>
        </div>
        <h2><?php  ?></h2>

        <!-- CAROUSEL -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <?php 
              image_carousel($img_carousel);              
            ?>
            
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <!-- CATALOG -->
        <section id="catalog">
          <div class="d-flex flex-row justify-content-around flex-wrap">
            <?php 
              image_catalogs(2,$catalogo,'Descargar');
            ?>
          </div>
        </section>
        
      </div>
      
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

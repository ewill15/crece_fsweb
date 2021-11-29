<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include_once 'pages/functions.php';
      $menu_option_setted = menu_options($menu,1);
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
        include_once 'pages/navigation.php'
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
    <!-- container -->
    <div class="container main-content py-3">
      <h1 class="text-center mt-3"><?php echo ucfirst(texto('catálogo')) ?></h1>
      <div id="catalog" class="info">
        <?php if($mostrar_video){ ?>
        <div class="embed-responsive embed-responsive-16by9 text-center">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-h0VFmyAZxc" allowfullscreen=""></iframe>
        </div>
        <?php } ?>
        <section id="catalog-b">
          <div class="d-flex flex-row justify-content-around flex-wrap">
            <?php 
              image_catalogs(count($catalogo),$catalogo,'Ver Detalle');
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

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 
      $titulo = "Catálogo";
      $menu = array('Inicio','Catálogo','Contacto','Servicio');
      $catalogo = array(
        array("titulo"=>"Cacao","descripcion"=>"Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus,
        tellus ac cursus commodo."),
        array("titulo"=>"Grageas chocolate","descripcion"=>"Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus,
                  tellus ac cursus commodo."),
        array("titulo"=>"Helado chocolate","descripcion"=>"Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus,
                  tellus ac cursus commodo."),
        array("titulo"=>"Paleta chocolate","descripcion"=>"Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus,
                  tellus ac cursus commodo."),
        array("titulo"=>"Tabletas chocolate","descripcion"=>"Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus,
                  tellus ac cursus commodo."),
        array("titulo"=>"Variedad de productos","descripcion"=>"Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus,
                  tellus ac cursus commodo.")
      );
      $btn_detalle = "Ver Detalle";
    ?>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $titulo ?></title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap"
      rel="stylesheet"
    />
    <link href="css/fontawesome/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!-- opciones de menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
      <div class="container-fluid">
        <div class="col-md-9">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="inicio.php">
                  <?php echo $menu[0] ?>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="catalogo.php"><?php echo $menu[1] ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacto.php"><?php echo $menu[2] ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="servicio.php"><?php echo $menu[3] ?></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 text-right">
          <a class="navbar-brand" href="#">
            <img class="w-25 img-fluid mx-auto" src="img/logo.png" alt="logo" />
          </a>
        </div>
      </div>
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
      <h1><?php echo $titulo ?></h1>
      <div id="catalog" class="info">
        <div class="embed-responsive embed-responsive-16by9 text-center">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-h0VFmyAZxc" allowfullscreen=""></iframe>
        </div>
        <section id="catalog-b">
          <div class="d-flex flex-row justify-content-around flex-wrap">
            <div class="card my-3">
              <img class="card-img-top" src="img/cocoa.svg" alt="cacao" />
              <div class="card-body">
                <h5 class="card-title"><?php echo $catalogo[0]['titulo']?></h5>
                <p class="card-text">
                  <?php echo $catalogo[0]['descripcion']?>
                </p>
                <a href="#" class="btn btn-outline-chocolate d-block text-center">
                  <?php echo $btn_detalle ?>
                </a>
              </div>
            </div>
            <div class="card my-3">
              <img
                class="card-img-top"
                src="img/grageas.jpeg"
                alt="grageas chocolate "
              />
              <div class="card-body">
                <h5 class="card-title"><?php echo $catalogo[1]['titulo']?></h5>
                <p class="card-text">
                  <?php echo $catalogo[1]['descripcion']?>
                </p>
                <a href="#" class="btn btn-outline-chocolate d-block text-center"><?php echo $btn_detalle ?></a>
              </div>
            </div>
            <div class="card my-3">
              <img
                class="card-img-top"
                src="img/helado.png"
                alt="helado chocolate "
              />
              <div class="card-body">
                <h5 class="card-title"><?php echo $catalogo[2]['titulo']?></h5>
                <p class="card-text">
                  <?php echo $catalogo[2]['descripcion']?>
                </p>
                <a href="#" class="btn btn-outline-chocolate d-block text-center"><?php echo $btn_detalle ?></a>
              </div>
            </div>
            <div class="card my-3">
              <img
                class="card-img-top"
                src="img/paleta.png"
                alt="paleta chocolate "
              />
              <div class="card-body">
                <h5 class="card-title"><?php echo $catalogo[3]['titulo']?></h5>
                <p class="card-text">
                  <?php echo $catalogo[3]['descripcion']?>
                </p>
                <a href="#" class="btn btn-outline-chocolate d-block text-center"><?php echo $btn_detalle ?></a>
              </div>
            </div>
            <div class="card my-3">
              <img
                class="card-img-top"
                src="img/tabletas.png"
                alt="tabletas chocolate "
              />
              <div class="card-body">
                <h5 class="card-title"><?php echo $catalogo[4]['titulo']?></h5>
                <p class="card-text">
                  <?php echo $catalogo[4]['descripcion']?>
                </p>
                <a href="#" class="btn btn-outline-chocolate d-block text-center"><?php echo $btn_detalle ?></a>
              </div>
            </div>
            <div class="card my-3">
              <img class="card-img-top" src="img/treats.svg" alt="varios" />
              <div class="card-body">
                <h5 class="card-title"><?php echo $catalogo[5]['titulo']?></h5>
                <p class="card-text">
                  <?php echo $catalogo[5]['descripcion']?>
                </p>
                <a href="#" class="btn btn-outline-chocolate d-block text-center"><?php echo $btn_detalle ?></a>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <!-- Pie -->
    <footer class="container-fluid pt-4 mt-md-5 pt-md-5 border-top bg-light">
      <div class="row">
        <div class="col-2"></div>
        <div class="col-2">
          <ul class="list-unstyled text-small">
            <li class="nav-item">
              <a class="nav-link w-25" href="inicio.php"><?php echo $menu[0] ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link w-25" href="catalogo.php"><?php echo $menu[1] ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link w-25 active" href="contacto.php"><?php echo $menu[2] ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link w-25" href="servicio.php"><?php echo $menu[3] ?></a>
            </li>
          </ul>
        </div>
        <div class="col-5">
          <div class="d-flex justify-content-around">
            <div class="social-facebook fa-2x">
              <i class="fab fa-facebook"></i>
            </div>
            <div class="social-instagram fa-2x">
              <i class="fab fa-instagram"></i>
            </div>
            <div class="social-twitter fa-2x">
              <i class="fab fa-twitter"></i>
            </div>
            <div class="social-whatsapp fa-2x">
              <i class="fab fa-whatsapp"></i>
            </div>
          </div>          
        </div>
        <div class="col-3">
          <img class="mx-auto d-block w-35" src="img/logo.png" alt="logo" />
        </div>
      </div>
    </footer>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>

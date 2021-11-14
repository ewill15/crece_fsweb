<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 
      $titulo = "Catálogo";
      $menu = array(
        array("text"=>'Inicio',"page"=>"inicio.php"),
        array("text"=>'Catálogo',"page"=>"catalogo.php"),
        array("text"=>'Contacto',"page"=>"contacto.php"),
        array("text"=>'Servicio',"page"=>"servicio.php")
      );
      $catalogo = array(
        array(
          "titulo"=>"Cacao",
          "descripcion"=>"Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus,tellus ac cursus commodo.",
          "image"=>"img/cocoa.svg",
          "alt"=>"cacao"
        ),
        array(
          "titulo"=>"Grageas chocolate",
          "descripcion"=>"Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus,tellus ac cursus commodo.",
          "image"=>"img/grageas.jpeg",
          "alt"=>"grageas chocolate"
        ),
        array(
          "titulo"=>"Helado chocolate",
          "descripcion"=>"Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus,tellus ac cursus commodo.",
          "image"=>"img/helado.png",
          "alt"=>"helado chocolate"
        ),
        array(
          "titulo"=>"Paleta chocolate",
          "descripcion"=>"Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo.",
          "image"=>"img/paleta.png",
          "alt"=>"paleta chocolate"
        ),
        array(
          "titulo"=>"Tabletas chocolate",
          "descripcion"=>"Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo.",
          "image"=>"img/tabletas.png",
          "alt"=>"tabletas chocolate"),
        array(
          "titulo"=>"Variedad de productos",
          "descripcion"=>"Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo.",
          "image"=>"img/treats.svg",
          "alt"=>"varios"
        )
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
            <?php 
              for ($i=0; $i < 4; $i++) { 
                if($i==1){
                  echo "<li class='nav-item'>
                  <a class='nav-link w-25 active' href='".$menu[$i]['page']."'>".$menu[$i]['text']."</a>
                  </li>";
                }else{
                  echo "<li class='nav-item'>
                  <a class='nav-link w-25' href='".$menu[$i]['page']."'>".$menu[$i]['text']."</a>
                  </li>";
                }
                
              }
            ?>
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
            <?php 
              for ($i=0; $i < 6 ; $i++) {
                echo "<div class='card my-3'>
                  <img class='card-img-top' src='".$catalogo[$i]['image']."' alt='".$catalogo[$i]['alt']."'>
                  <div class='card-body'>
                    <h5 class='card-title'>".$catalogo[$i]['titulo']."</h5>
                    <p class='card-text'>".$catalogo[$i]['descripcion']."</p>
                    <a href='#' class='btn btn-outline-chocolate d-block text-center'>$btn_detalle</a>
                  </div>
                </div>";
              }
            ?>
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
            <?php 
              for ($i=0; $i < 4; $i++) { 
                if($i==1){
                  echo "<li class='nav-item'>
                  <a class='nav-link w-25 active' href='".$menu[$i]['page']."'>".$menu[$i]['text']."</a>
                  </li>";
                }else{
                  echo "<li class='nav-item'>
                  <a class='nav-link w-25' href='".$menu[$i]['page']."'>".$menu[$i]['text']."</a>
                  </li>";
                }
              }
            ?>
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

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 
      $titulo = "Inicio";
      $seccion1_plural = "Servicios";
      $seccion2 = "Catálogo";
      $descripcion = "<p>
        Phasellus eget arcu at dui mattis mollis. 
        Maecenas lobortis elit eget arcu aliquam tincidunt. 
        Nunc elementum pellentesque imperdiet. 
        Suspendisse et lacus porttitor, fermentum enim elementum, rhoncus neque. 
        Integer et fringilla enim, nec mollis magna. Quisque sed pharetra quam.
        Aliquam luctus, dui et aliquam ornare, 
        risus risus blandit dui, in maximus justo nulla ac magna.
        Cras viverra tellus ac neque tincidunt lacinia. 
        Donec hendrerit eros in venenatis rhoncus. 
        Curabitur porttitor metus risus, vel fringilla massa pellentesque vel.
        Cras ante nulla, placerat ut volutpat a, auctor vel enim. 
        Vestibulum quis diam vitae ipsum fringilla rutrum a eu elit. 
        Cras vestibulum, velit in dapibus semper, augue est dignissim lacus, 
        sed aliquet purus orci in mi. Vivamus et lobortis urna.
        </p>";
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
      $btn_descarga = "Download";
      $menu = array(
        array("text"=>'Inicio',"page"=>"inicio.php"),
        array("text"=>'Catálogo',"page"=>"catalogo.php"),
        array("text"=>'Contacto',"page"=>"contacto.php"),
        array("text"=>'Servicio',"page"=>"servicio.php")
      );
      $img_carousel = array(
        array("image"=>"img/grageas.jpeg","alt"=>"grageas chocolate"),
        array("image"=>"img/helado.png","alt"=>"helado chocolate"),
        array("image"=>"img/tabletas.png","alt"=>"tabletas chocolate")
      );

      function menu_options($menu=[],$menu_active=0){
        for ($i=0; $i < count($menu); $i++) { 
          if($i==$menu_active){
            echo "<li class='nav-item'>
            <a class='nav-link w-25 active' href='".$menu[$i]['page']."'>".$menu[$i]['text']."</a>
            </li>";
          }else{
            echo "<li class='nav-item'>
            <a class='nav-link w-25' href='".$menu[$i]['page']."'>".$menu[$i]['text']."</a>
            </li>";
          }
        }
      }

      function image_catalogs($nro_images=0,$imagenes=[],$btn_descarga='descargar'){
        for ($i=0; $i < $nro_images ; $i++) {
          $random_image = rand(0,5);
          echo "<div class='card my-3'>
            <img class='card-img-top' src='".$imagenes[$random_image]['image']."' alt='".$imagenes[$random_image]['alt']."'>
            <div class='card-body'>
              <h5 class='card-title'>".$imagenes[$random_image]['titulo']."</h5>
              <p class='card-text'>".$imagenes[$random_image]['descripcion']."</p>
              <a href='#' class='btn btn-outline-chocolate d-block text-center'>$btn_descarga</a>
            </div>
          </div>";
        }
      }

      function image_carousel($img_carousel,$img_to_show=3)
      {
        for ($i=0; $i < $img_to_show; $i++) { 
          if($i==0){
            echo "<div class='carousel-item active'>
            <img class='d-block w-50 mx-auto' src='".$img_carousel[$i]['image']."' alt='".$img_carousel[$i]['alt']."'>
          </div>";
          }else{
            echo "<div class='carousel-item'>
            <img class='d-block w-50 mx-auto' src='".$img_carousel[$i]['image']."' alt='".$img_carousel[$i]['alt']."'>
          </div>";
          }
        }
      }
      function social_media(){
        echo "<div class='social-facebook fa-2x'>
          <i class='fab fa-facebook'></i>
        </div>
        <div class='social-instagram fa-2x'>
          <i class='fab fa-instagram'></i>
        </div>
        <div class='social-twitter fa-2x'>
          <i class='fab fa-twitter'></i>
        </div>
        <div class='social-whatsapp fa-2x'>
          <i class='fab fa-whatsapp'></i>
        </div>";
      }
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
                menu_options($menu);
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
        <div class="col my-3 banner">
          <img class="mx-auto d-block w-15" src="img/logo.png" alt="logo" />
        </div>
      </div>
    </div>
    <!-- Contenido -->
    <div class="container main-content">
      <div id="start" class="info">
        <div class="my-5">
          <h2 class="text-center"><?php echo $seccion1_plural?></h2>
          <img class="mx-auto d-block w-15 my-5" src="img/treats.svg" alt="logo" />
          <?php echo $descripcion ?>
        </div>
        <h2><?php echo $seccion2 ?></h2>

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
      <div class="row">
        <div class="col-2"></div>
        <div class="col-2">
          <ul class="list-unstyled text-small">
            <?php 
              menu_options($menu);
            ?>
          </ul>
        </div>
        <div class="col-5">
          <div class="d-flex justify-content-around">
            <?php               
              social_media();
            ?>
          </div>          
        </div>
        <div class="col-3">
          <img class="mx-auto d-block w-35" src="img/logo.png" alt="logo" />
        </div>
      </div>
    </footer>

    <script src="js/bootstrap.js"></script>
  </body>
</html>

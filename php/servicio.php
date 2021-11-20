<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 
      $titulo = "Servicio";
      $titulo_plural = "Servicios";
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
      $menu = array(
        array("text"=>'Inicio',"page"=>"inicio.php"),
        array("text"=>'Catálogo',"page"=>"catalogo.php"),
        array("text"=>'Contacto',"page"=>"contacto.php"),
        array("text"=>'Servicio',"page"=>"servicio.php")
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
    <title><?php echo $titulo?></title>
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
              menu_options($menu,3);
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
    <!-- Contenido -->
    <div class="container main-content">
      <div id="service" class="info">
        <h1 class="text-center mt-3"><?php echo $titulo_plural ?></h1>
        <?php echo $descripcion ?>
        <?php echo $descripcion ?> 
      </div>
      <!-- informacion de servicio -->
    </div>
    <!-- Pie -->
    <footer class="container-fluid pt-4 mt-md-5 pt-md-5 border-top bg-light">
      <div class="row">
        <div class="col-2"></div>
        <div class="col-2">
          <ul class="list-unstyled text-small">
            <?php 
              menu_options($menu,3);
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

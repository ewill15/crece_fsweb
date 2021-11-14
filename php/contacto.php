<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 
      $titulo = "Contacto";
      $seccion1_plural = "Contáctanos";
      $descripcion = "<p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem
        reiciendis iure, asperiores provident modi vero labore at fuga quaerat
        similique, cumque praesentium saepe. Quaerat alias corporis voluptatem
        dignissimos atque vel?
      </p>";
      $btn_enviar = "Enviar";
      $menu = array(
        array("text"=>'Inicio',"page"=>"inicio.php"),
        array("text"=>'Catálogo',"page"=>"catalogo.php"),
        array("text"=>'Contacto',"page"=>"contacto.php"),
        array("text"=>'Servicio',"page"=>"servicio.php")
      );
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
                if($i==2){
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
    <!-- Contenido -->
    <div class="container main-content">
      <div id="contact" class="info">
        <h1 class="text-center mt-3"><?php echo $titulo ?></h1>
        <?php echo $descripcion?>
        <div class="form-contact">
          <h3 class="text-center my-5"><?php echo $seccion1_plural ?></h3>
          <form id="frm-contact" action="#" method="post" autocomplete="off">
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
                  placeholder="Escribe aqui tu comentario"
                ></textarea>
              </div>
            </div>
            <div class="form-group row mb-3">
              <div class="col-md-12 text-center">
                <button class="btn btn-primary" type="submit">
                  <?php echo $btn_enviar ?>
                </button>
              </div>
            </div>
          </form>
        </div>
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
                if($i==2){
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

    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>

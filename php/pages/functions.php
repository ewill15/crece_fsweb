<?php
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
  $descripcion_2 = "<p>
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
  $mostrar_video = false;

  function texto($contenido_texto,$plural=false){
    if($plural)
      $contenido_texto = $contenido_texto.'s';

    return $contenido_texto;
  }

  function menu_options($menu=[],$menu_active=0){
    $options = '';
    
    for ($i=0; $i < count($menu); $i++) { 
      if($i==$menu_active){
        $options .= "<li class='nav-item'>
        <a class='nav-link w-25 active' href='".$menu[$i]['page']."'>".$menu[$i]['text']."</a>
        </li>";
      }else{
        $options .= "<li class='nav-item'>
        <a class='nav-link w-25' href='".$menu[$i]['page']."'>".$menu[$i]['text']."</a>
        </li>";
      }
    }

    return $options;
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

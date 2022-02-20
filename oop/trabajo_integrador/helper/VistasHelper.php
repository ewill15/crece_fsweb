<?php

namespace App\Helper;

class VistasHelper{
    public function vistaa($vistas,$datos){
        $archivo = "view/$vistas.php";
        require($archivo);
    }
}
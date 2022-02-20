<?php

namespace App;

use App\Controller\PedidoController;


//Defino la función que atocargará la clase cuando se instancie
//link para verificar la funcion https://www.php.net/manual/es/function.spl-autoload-register.php
//
spl_autoload_register('App\autoload');

function autoload($clase, $dir = null)
{

    //Directorio raíz de mi proyecto (ruta absoluta)
    if (is_null($dir)) {
        $dir = realpath(dirname(__FILE__));
    }

    //Escaneo en busca de clases de forma recursiva
    foreach (scandir($dir) as $file) {
        //Si es un directorio (y no es de sistema) busco la clase dentro de él
        if (is_dir($dir . "/" . $file) and substr($file, 0, 1) != ".") {
            autoload($clase, $dir . "/" . $file);
        }
        //Si es archivo y el nombre coincide con la clase que quiero instanciar (quitando el namespace)
        else if (is_file($dir . "/" . $file) and $file == substr(strrchr($clase, "\\"), 1) . ".php") {
            require($dir . "/" . $file);
        }
    }
}



//Requerimos los archivos
//require ("./model/Vehiculo.php");
//require ("./controller/VehiculoController.php");

//Instanciamos el controlador
$controller = new PedidoController();

//Ruta principal
$home = "/MODULO_POO_2/cuarta parte/index.php";

//Retiramos el home de la ruta
$ruta = str_replace($home, "", $_SERVER["REQUEST_URI"]);

//filtramos la ruta
$array_ruta = array_filter(explode("/", $ruta));

$count = count($array_ruta);

if (array_search("vista", $array_ruta, true)) {
    if (is_numeric($array_ruta[$count])) {
        $controller->vista($array_ruta[$count]);
    } else {
        $controller->error();
    }
} else {
    //llamamos vista por defecto 
    $controller->index();
}

<?php

//Requerimos los archivos
require("./model/Vehiculo.php");
require("./controller/VehiculoController.php");

//Instanciamos el controlador
$controller = new VehiculoController();

//Ruta principal
$home = "/MODULO_POO_2/cuarta parte/index.php";

//Retiramos el home de la ruta
$ruta = str_replace($home, "", $_SERVER["REQUEST_URI"]);

//filtramos la ruta
$array_ruta = array_filter(explode("/", $ruta));

$count = count($array_ruta);

if (array_search("vista", $array_ruta, true)) {
    if ($count && is_numeric($array_ruta[$count])) {
        $controller->vista($array_ruta[$count]);
    } else {
        $controller->error();
    }
} else {
    //llamamos vista por defecto 
    $controller->index();
}

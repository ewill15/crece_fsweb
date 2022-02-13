<?php

class VehiculoController
{
    var $vehiculo;

    function __construct()
    {
        $this->vehiculos = [
            1 => new Vehiculo("Nissan", "Versa", "Blanco", "Guillermo"),
            2 => new Vehiculo("Suzuki", "Vitara", "Rojo", "Antonio"),
            3 => new Vehiculo("Toyota", "Tacoma", "Azul", "Felipe")
        ];
    }

    public function index()
    {
        //asignamos una variable
        $rowset = $this->vehiculos;

        //enviamos la vista
        require("view/index.php");
    }

    public function vista($id)
    {
        if (array_key_exists($id, $this->vehiculos)) {
            $vehiculo = $this->vehiculos[$id];
            require("view/vista.php");
        } else {
            header("Location: index.php");
        }
    }
}

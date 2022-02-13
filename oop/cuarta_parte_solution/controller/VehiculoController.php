<?php

class VehiculoController
{
    var $vehiculo;

    function __construct()
    {
        $this->vehiculos = [

            1 => new Vehiculo("BMW", "Serie", "Blanco", "Eduardo"),
            2 => new Vehiculo("Suzuki", "Alto", "Gris Granito", "Marcelo"),
            3 => new Vehiculo("Toyota", "Tundra", "Plomo", "Fernando")
        ];

    }

    public function index()
        {
            //asignamos una variable
            $rowset= $this->vehiculos;

            //enviamos la vista
            require("view/index.php");
        }

        public function error()
        {
            //asignamos una variable
            $rowset= $this->vehiculos;

            //enviamos la vista
            require("view/error.php");
        }

        public function vista($id)
        {
            if(array_key_exists($id, $this->vehiculos)){
                $row= $this->vehiculos[$id];
                require("view/vista.php");
            }
            else{
                $this->index();
            }
        }
}
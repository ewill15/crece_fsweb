<?php

namespace App\Controller;

use App\Helper\VistasHelper;
use App\Model\Pedido;

class PedidoController
{
    var $pedido;
    var $vistas;

    function __construct()
    {
        $this->pedidos = [
            1 => new Pedido("salteñas", "5 salteñas picantes, 3 salteñas dulces", -17.3704053, -66.1666031, "Adela Zamudio 420", 7625487),
            2 => new Pedido("Restaurant Moreira", "5 almuerzos completos 3 picante de gallina y 2 lapping", -17.3853832,-66.1707844, "Los Arces 182", 70645120),
            3 => new Pedido("salteñas", "15 salteñas picantes, 30 salteñas dulces", -17.3704053, -66.1666031, "Adela Zamudio 420", 79032541),
            4 => new Pedido("El palacio del Silpancho", "5 silpanchos de pollo y 3 silpanchos de carne", -17.3729292,-66.1772434, "Los Arces 182", 70645120),
            5 => new Pedido("Pollo al spiedo", "1 pollo entero troceado con guarnicion  de arroz y papas ", -17.3716916,-66.1749491, "Av America 900", 79032541),
        ];

        $this->vistas = new VistasHelper();
    }

    public function index()
    {
        //asignamos una variable
        $rowset = $this->pedidos;

        //enviamos la vista
        // require("view/index.php");

        $this->vistas->vistaa("index",$rowset);
    }

    public function error()
    {
        //asignamos una variable
        $rowset = $this->pedidos;

        //enviamos la vista
        require("view/error.php");
    }

    public function vista($id)
    {
        if (array_key_exists($id, $this->pedidos)) {
            $row = $this->pedidos[$id];
            require("view/vista.php");
        } else {
            $this->index();
        }
    }
}

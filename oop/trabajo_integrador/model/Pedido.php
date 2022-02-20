<?php

namespace App\Model;

class Pedido{
    var $titulo;
    var $descripcion;
    var $latitud;
    var $longitud;
    var $direccion;
    var $celular;

    function __construct($titulo,$descrip,$lat,$lng,$addr,$celular)
    {
        $this->titulo = $titulo;
        $this->descripcion = $descrip;
        $this->latitud = $lat;
        $this->longitud = $lng;
        $this->direccion = $addr;
        $this->celular = $celular;
    }
    // GET & SET 
    function getTitulo(){return $this->titulo;}    
    function setTitulo($titulo){$this->titulo = $titulo;}

    function getDescripcion(){return $this->descripcion;}    
    function setDescripcion($descripcion){$this->descripcion = $descripcion;}

    function getLatitud(){return $this->latitud;}    
    function setLatitud($latitud){$this->latitud = $latitud;}
    
    function getLongitud(){return $this->longitud;}    
    function setLongitud($longitud){$this->longitud = $longitud;}
    
    function getDireccion(){return $this->direccion;}    
    function setDireccion($direccion){$this->direccion = $direccion;}
    
    function getCelular(){return $this->celular;}
    function setCelular($celular){$this->celular = $celular;}
}
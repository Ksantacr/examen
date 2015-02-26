<?php

class Factura
{
    private $idFactura;
    private $descripcion;
    private $total;
    
     function __construct($idFactura, $descripcion, $total) {
       $this->total = $total;
       $this->idFactura = $idFactura;
       $this->descripcion = $descripcion;
     }
    
     function setidFactura($idFactura){
       $this->idFactura = $idFactura;
     } 
     function getidFactura(){
       return $this->idFactura;
     } 
     function setdescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getdescripcion(){
       return $this->descripcion;
     }
     function settotal($total){
      $this->$total = $total;
     }
     function gettotal(){
       return $this->total;
     }

}

?> 

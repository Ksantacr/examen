<?php 

include_once("Factura.php");
include_once("Collector.php");

class FacturaCollector extends Collector{

	function showFactura($id) {
    $row = self::$db->getRows("SELECT * FROM BD_prueba.factura where idfactura= ? ", array("{$id}"));
    $Objfactura = new Factura($row[0]{'idfactura'},$row[0]{'descripcion'},$row[0]{'total'});
    return $Objfactura;
  }

  function createFactura($descripcion, $total) {    
    $insertrow = self::$db->insertRow("INSERT INTO BD_prueba.factura (idfactura,descripcion, total) VALUES (?, ?, ?)", array(null, "{$descripcion}", "{$total}"));
  }  

  function readFacturas() {
    $rows = self::$db->getRows("SELECT * FROM BD_prueba.factura");        
    $arrayfacturas= array();        
    foreach ($rows as $c){
      $aux = new Factura($c{'idfactura'},$c{'descripcion'},$c{'total'});
      array_push($arrayfacturas, $aux);
    }
    return $arrayfacturas;        
  }
}
 ?>
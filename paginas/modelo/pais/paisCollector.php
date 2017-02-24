<?php

include_once('pais.php');
include_once("../collector.php");

include_once("../ciudad/ciudadCollector.php");

$CiudadCollectorObj = new CiudadCollector();
$CiudadCollectorObj = new CiudadCollector();

class paisCollector extends collector
{

function showPaises() {
    $rows = self::$db->getRows("SELECT * FROM pais");        
   
    $arrayPais= array();        
    foreach ($rows as $c){
      $aux = new pais($c{'id_pais'},$c{'nombre'},$c{'codigo'});
      array_push($arrayPais, $aux);
    }
    return $arrayPais;        
  }

       function createPais($nombre,$codigo) {
        $rows = self::$db->insertRow("INSERT INTO pais (nombre, codigo) VALUES ('$nombre' , '$codigo')",null);
        
    }

   function deletePais($id) {
            #foreach ($CiudadCollectorObj->showCiudades() as $c){
             #       if ($c->getIdPais()==$id){
              #           $rows = self::$db->deleteRow("DELETE FROM empresa WHERE id_ciudad=$c->getIdCiudad()",null);
               #         
                #    }
                                
        $rows = self::$db->deleteRow("DELETE FROM ciudad WHERE id_pais=$id",null);
    
        $rows = self::$db->deleteRow("DELETE FROM pais WHERE id_pais=$id",null);
    
    
    }

    function updatePais($id,$nombre,$codigo) {
        $rows = self::$db->insertRow("UPDATE pais SET nombre='$nombre' , codigo='$codigo'  WHERE id_pais='$id'" ,null);
        
    }

  }
?>


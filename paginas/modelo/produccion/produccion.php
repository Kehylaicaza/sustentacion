<?php

class produccion
{
    private $id_produccion;
    private $fecha;
    private $id_empresa;
    
     function __construct($id_produccion, $fecha, $id_empresa) {
       $this->id_produccion = $id_produccion;
       $this->fecha = $fecha;
       $this->id_empresa = $id_empresa;
     }
    
     function setid_produccion($id_produccion){
       $this->id_produccion = $id_produccion;
     } 
     function getid_produccion(){
       return $this->id_produccion;
     } 
     function setfecha($fecha){
       $this->fecha = $fecha;
     } 
     function getfecha(){
       return $this->fecha;
     } 
    
     function setid_empresa($id_empresa){
       $this->id_empresa = $id_empresa;
     } 
     function getid_empresa(){
       return $this->id_empresa;
     } 
}

?> 

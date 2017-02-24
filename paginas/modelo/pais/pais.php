<?php

class Pais
{
private $idPais;
    private $nombre;
private $codigo;


  function __construct($idPais, $nombre, $codigo) {
    $this->idPais = $idPais;
       $this->nombre = $nombre;
     $this->codigo = $codigo;
   
     }



function setNombre($nombre){
       $this->nombre = $nombre;
     }

function getNombre(){
       return $this->nombre;
     } 

 function setIdPais($idPais){
       $this->idPais = $idPais;
     } 
     function getIdPais(){
       return $this->idPais;
     } 



function setCodigo($codigo){
       $this->codigo = $codigo;
     }

function getCodigo(){
       return $this->codigo;
     } 

}

?> 

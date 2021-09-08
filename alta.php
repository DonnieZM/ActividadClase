<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Alta{

    private $Tipo;
    private $Nivel;
    private $Imagen;



    public function setNivel($valor){
        $this->Nivel=$valor;
    }
   
    public function setTipo($valor){
        $this->Tipo=$valor;
    }

    public function setImagen($valor){
        $this->Imagen=$valor;
    }

    public function getTipo(){
        return $this->Tipo;
    }

    public function getNivel(){
        return $this->Nivel;
    }

    public function getImagen(){
        return $this->Imagen;
    }
}
?>
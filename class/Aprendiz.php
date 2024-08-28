<?php

// Incluir la clase padre
include_once ("Persona.php");

// Clase de Aprendiz que se hereda de Persona
class Aprendiz extends Persona{

    // Atributos propios del aprendiz
    protected $cuenta;
    protected $promedio;

    // Metodos getters 
    public function getCuenta(){
        return $this->cuenta;
    }
    public function getPromedio(){
        return $this->promedio;
    }

    public function setCuenta($cuenta){
        $this->cuenta = $cuenta;
    }
    public function setPromedio($promedio){
        $this->promedio = $promedio;
    }
}
<?php

// Incluir la clase padre
include_once ("Persona.php");

// Clase de Aprendiz que se hereda de Persona
class Aprendiz extends Persona{

    // Atributos propios del aprendiz
    private $cuenta;
    private $promedio;

    public function __construct(PDO $connection)
    {
        parent::__construct("id", "tb_persona", $connection);
    }

    // Metodos getters 
    public function getCuenta(){
        return $this->cuenta;
    }
    public function getPromedio(){
        return $this->promedio;
    }

    // Metodos setters
    public function setCuenta($cuenta){
        $this->cuenta = $cuenta;
    }
    public function setPromedio($promedio){
        $this->promedio = $promedio;
    }
}
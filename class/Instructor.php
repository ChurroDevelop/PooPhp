<?php

// Incluye la clase padre
include_once("Persona.php");

// Clase de Instructor que se hereda de Persona
class Instructor extends Persona{

    private $sueldo;
    private $horario;
}
<?php   

// Clase persona
class Persona{

    // Atributos protegidos de la clase persona
    protected $nombre;
    protected $apellido;
    protected $edad;
    protected $genero;
    protected $carrera;

    // Constructor con parametros
    // public function __construct($nombre, $apellido, $edad, $genero, $carrera)
    // {
    //     $this->nombre = $nombre;
    //     $this->apellido = $apellido;
    //     $this->edad = $edad;
    //     $this->genero = $genero;
    //     $this->carrera = $carrera;
    // }

    public function __construct()
    {
        echo "Soy el contructor <br>";
    }

    // Metodos getters de los atributos
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function getGenero(){
        return $this->genero;
    }
    public function getCarrera(){
        return $this->carrera;
    }

    // Metodos setters de los atributos
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function setEdad($edad){
        $this->edad = $edad;
    }
    public function setGenero($genero){
        $this->genero = $genero;
    }
    public function setCarrera($carrera){
        $this->carrera = $carrera;
    }

    // Metodo de la clase
    function saludar(){
        return "Hola, mi nombre es: " . $this->nombre . " " . $this->apellido;
    }
}
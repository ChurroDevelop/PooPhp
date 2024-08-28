<?php   
// Clase persona
class Persona extends Modelo{

    // Atributos protegidos de la clase persona
    protected $nombre;
    protected $apellido;
    protected $edad;
    protected $genero;
    protected $carrera;

    public function __construct($id, $table, PDO $con)
    {
        parent::__construct($id, $table, $con);
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
        return "<p> Hola, mi nombre es: <b>" . $this->nombre . " " . $this->apellido. "</b> </p>";
    }
}
<?php
include_once('myBaseDeDato.php');
class altaBajaEdicionPK
{
// atributos
    private $conexion;
    private $numero_identificador;
    private $imagen;
    private $nombre;
    private $tipo_1;
    private $tipo_2;
    private $descripcion;

// constructor
    function __construct(){
        $config = parse_ini_file("credential.ini");
        $this->conexion = new mysqli(   $config['server'],
                                        $config['user'],
                                        $config['pass'],
                                        $config['database']);
    }

// metodos
    public function alta($numero_identificador, $imagen, $nombre, $tipo_1, $tipo_2, $descripcion)
    {
        // tengo que pasarle todos los atributos
        $this->numero_identificador = $numero_identificador;
        $this->imagen = $imagen;
        $this->nombre = $nombre;
        $this->tipo_1 = $tipo_1;
        $this->tipo_2 = $tipo_2;
        $this->descripcion = $descripcion;

        $query = "INSERT INTO pokemon 
                  (numero_identificador, imagen, nombre, tipo_1, tipo_2, descripcion) 
                  VALUES ('$numero_identificador','$imagen','$nombre','$tipo_1','$tipo_2','$descripcion')";

        return $this->conexion->query($query)=== TRUE ? "exito": "Error";
    }

}



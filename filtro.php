<?php
include_once('myBaseDeDato.php');

class filtro
{
    private $conexion;
    function __construct(){
        $config = parse_ini_file("credential.ini");
        $this->conexion = new myBaseDeDato(
            $config['server'],
            $config['user'],
            $config['pass'],
            $config['database']
                                );
    }

    public function buscar($pokemonBuscado){
        $conexion = $this->conexion;
        $pokemon = trim($pokemonBuscado);
        $pokemoEncontrado = $conexion->query("SELECT * FROM pokemon WHERE nombre LIKE '%$pokemon%'");
        $pokemones = $conexion->query("SELECT * FROM pokemon");

        if ( count($pokemoEncontrado) < 1){
            return $pokemones;
        } else {
            return $pokemoEncontrado;}

    }

    public function traerElPorkemonEspecifico($numero_identificador)
    {
        $conexion = $this->conexion;
        $pokemoEncontrado = $conexion->query("SELECT * FROM pokemon WHERE numero_identificador = ". $numero_identificador );

        return $pokemoEncontrado;
    }
}
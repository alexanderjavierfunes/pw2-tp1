<?php

class myBaseDeDato
{
    private $conexion;
    private $conexionStatus;

    public function __construct($host,$username,$password,$database){
        $this->conexion = new mysqli($host,$username,$password,$database);
    }

    public function query($string){
        $resultado = $this->conexion->query($string);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function statusConexion($conexion){
        $this->conexionStatus = $conexion->connect_error;
    }

    public function getConexionStatus()
    {
        return $this->conexionStatus;
    }

    public function query_insert($queryInsert)
    {
          $this->conexion->query($queryInsert);

    }
}
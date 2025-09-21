<?php
session_start();
require_once('myBaseDeDato.php');

$username = isset( $_POST['username'])?$_POST['username']:'';
$password = isset( $_POST['password'])?$_POST['password']:'';


$config = parse_ini_file("credential.ini");
$conexion = new MyBaseDeDato(
    $config['server'],
    $config['user'],
    $config['pass'],
    $config['database']);

$queryExisteuser = "SELECT * FROM usuarios WHERE 
                           name = '$username'";
$queryInsert ="INSERT INTO usuarios (name, pass, profile)
VALUES ('$username', '$password', 'player')";

$resultado = $conexion->query($queryExisteuser);
$mensaje = (  sizeof($resultado) == 0) ? "Ingresas con tus nuevas credenciales":"existe el user, intenta con otro user";

if (sizeof($resultado) == 0)
        {$conexion->query_insert($queryInsert);
        {header('Location: paginaDeLogeo.php');}
        exit();}
        else {
        exit();}
//echo var_dump($queryInsert)

?>

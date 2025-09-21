<?php
session_start();
require_once('myBaseDeDato.php');

$username = isset( $_POST['username'])?$_POST['username']:'';
$password = isset( $_POST['password'])?$_POST['password']:'';
$profile = isset( $_POST['profile'])?$_POST['profile']:'';

$config = parse_ini_file("credential.ini");
$conexion = new MyBaseDeDato(
                        $config['server'],
                        $config['user'],
                        $config['pass'],
                        $config['database']);

$query = "SELECT * FROM usuarios WHERE 
                           name = '$username' and 
                            pass = '$password' and 
                            profile = '$profile'";
$resultado = $conexion->query($query);

if( count($resultado) !=0 ){
    $_SESSION['user'] = $username;
    $_SESSION['profile'] = $profile;
    header('Location: index.php');
    exit();
        } else{
    header('Location: paginaDeLogeo.php');
}




?>

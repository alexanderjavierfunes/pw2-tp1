<html>
<head>

</head>
<body>
<h1> Pokemon de detalle </h1>

<?php
include_once('filtro.php');

$buscado = isset( $_GET['numero_identificador']);
$filtro = new Filtro();
$datos = $filtro->traerElPorkemonEspecifico($buscado);

foreach ($datos as $dato) {
    echo "<tbody>";
    echo "<tr>";
    echo "<td><img src='". $dato['imagen'] ."' width='50'></td>";
    echo "<td> ". $dato['nombre']. "</td>";
    echo "<td> ". $dato['descripcion']. "</td>";
    echo "</tr>";
    echo "</tbody>";
    /* test*/
}

?>

</body>

</html>

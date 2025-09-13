<html>
<head>
    <style>
        body{
            background-color: dimgray;
        }
    </style>

</head>
<header>
</header>
<body>

<div style="text-align: left; padding: 10px;">
    <img src="https://static.wikia.nocookie.net/espokemon/images/e/e6/Site-logo.png"
         alt="Logo" width="150">
</div>


<form method="get">
    <input type="text" name="nombre" placeholder="Buscar Pokémon">
    <button type="submit">Buscar</button>
</form>

<table>
    <thead>
    <tr>
        <th>numero_identificador</th>
        <th>Imagen</th>
        <th>nombre</th>
        <th>Tipo</th>
    </tr>
    </thead>
<?php

include_once('filtro.php');

$buscado = isset( $_GET['nombre']);
$filtro = new Filtro($buscado);
$datos = $filtro->buscar($buscado);

foreach ($datos as $dato) {
    echo "<tbody>";
    echo "<tr>";
    echo "<td> ". $dato['numero_identificador']. "</td>";
    if  (in_array($dato['tipo_1'], ["Agua", "Fuego", "Hierba"])) {
        echo "<td> ". $dato['nombre']. "</td>";
    } else {
        echo "<td><img src='". $dato['imagen'] ."' width='50'></td>";}
    echo "<td><a href='http://localhost/TP1/detallePokemon.php?numero_identificador=" .
            $dato['numero_identificador'] .
            "' target='_blank'>" .
            $dato['nombre'] .
            "</a></td>";
    echo "<td> ". $dato['tipo_1']. "</td>";
    echo "</tr>";
    echo "</tbody>";
 }
?>
</table>


</body>
</html>

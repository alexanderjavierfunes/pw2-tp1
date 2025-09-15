<html>
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="container py-4">

<!-- Logo -->
<div class="mb-3">
    <img src="https://static.wikia.nocookie.net/espokemon/images/e/e6/Site-logo.png"
         alt="Logo" width="150" class="img-fluid">
</div>

<!-- Search Form -->
<form method="get" class="d-flex mb-3">
    <input type="text" name="nombre" placeholder="Buscar Pokémon" class="form-control me-2">
    <button type="submit" class="btn btn-primary">Buscar</button>
</form>

<!-- Table -->
<table class="table table-striped table-bordered bg-white">
    <thead class="table-dark">
    <tr>
        <th>numero_identificador</th>
        <th>Imagen</th>
        <th>nombre</th>
        <th>Tipo</th>
    </tr>
    </thead>
    <?php
    include_once('filtro.php');

    $buscado = ($_GET['nombre'])?$_GET['nombre']:"";
    $filtro = new Filtro();
    $datos = $filtro->buscar($buscado);

    foreach ($datos as $dato) {
        echo "<tbody>";
        echo "<tr>";
        echo "<td>" . $dato['numero_identificador'] . "</td>";
        if (in_array($dato['tipo_1'], ["Agua", "Fuego", "Hierba"])) {
            echo "<td>" . $dato['nombre'] . "</td>";
        } else {
            echo "<td><img src='" . $dato['imagen'] . "' width='50'></td>";
        }
        echo "<td><a href='http://localhost/TP1/detallePokemon.php?numero_identificador=" .
                $dato['numero_identificador'] .
                "' target='_blank'>" .
                $dato['nombre'] .
                "</a></td>";
        echo "<td>" . $dato['tipo_1'] . "</td>";
        echo "</tr>";
        echo "</tbody>";
    }
    ?>
</table>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

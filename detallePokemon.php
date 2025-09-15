<html>
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<!-- Header -->
<nav class="navbar navbar-light bg-white shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="https://static.wikia.nocookie.net/espokemon/images/e/e6/Site-logo.png"
                 alt="Logo" width="50" class="me-2">
            <span class="fw-bold fs-4">Pokédex</span>
        </a>
    </div>
</nav>

<div class="container">
    <h1 class="mb-4">Pokémon de Detalle</h1>

    <?php
    include_once('filtro.php');

    $buscado = ($_GET['numero_identificador']);
    $filtro = new Filtro();
    $datos = $filtro->traerElPorkemonEspecifico($buscado);

    foreach ($datos as $dato) {
        echo "
      <div class='card shadow-sm'>
        <div class='row g-0'>
          <!-- Image -->
          <div class='col-md-4 d-flex align-items-center justify-content-center p-3'>
            <img src='" . $dato['imagen'] . "' class='img-fluid rounded' alt='" . $dato['nombre'] . "'>
          </div>
          <!-- Details -->
          <div class='col-md-8'>
            <div class='card-body'>
              <h3 class='card-title'>" . $dato['nombre'] . "</h3>
              <p class='card-text text-muted'>" . $dato['descripcion'] . "</p>
            </div>
          </div>
        </div>
      </div>
      ";
    }
    ?>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</body>

</html>

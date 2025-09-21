
<html>
<head>
</head>
<header>
</header>

<body>

<form action="nuevaCuenta.php" method="post">
    <label for="username">User:</label><br>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Pass:</label><br>
    <input type="password" id="password" name="password" required><br>

    <br>
    <button type="submit">Enviar</button>
    </a>
</form>

<?php
global$mensaje;
include_once('nuevaCuenta.php');
echo $mensaje;
?>

</body>



</html>



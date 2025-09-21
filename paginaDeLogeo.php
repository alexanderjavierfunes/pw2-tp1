<?php
session_start();
?>
<html>
<head>
</head>
<header>
</header>

<body>

<form action="login.php" method="post">
    <label for="username">User:</label><br>
    <input type="text" id="username" name="username"><br>

    <label for="password">Pass:</label><br>
    <input type="password" id="password" name="password"><br>

    <label for="profile">Profile:</label><br>
    <select id="profile" name="profile">
        <option value="player">player</option>
        <option value="administrator">administrator</option>
    </select><br>
    <br>
    <button type="submit">Enviar</button>

    <a href="http://localhost/pw2-tp1/crearCuentaNueva.php" class="btn btn-secondary">
        Crear nueva cuenta
    </a>
</form>

</body>



</html>



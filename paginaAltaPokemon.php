<head>

</head>
<header>

</header>
<body>

<form action="" method="post">
    <label for="for_inden"> Numero Identificador </label>
    <input type="number" id="for_inden" name="name_num_ident"><br><br>
    <label for="for_img"> Imagen </label>
    <input type="text" id="for_img" name="name_img"><br><br>
    <label for="for_nombre"> Nombre </label>
    <input type="text" id="for_nombre" name="name_nombre"><br><br>
    <label for="for_tp1"> Tipo I </label>
    <input type="text" id="for_tp1" name="name_tp1"><br><br>
    <label for="for_tp2"> Tipo II </label>
    <input type="text" id="for_tp2" name="name_tp2"><br><br>
    <label for="for_des"> Descripcion </label>
    <input type="text" id="for_des" name="name_des"><br><br>
    <input type="submit" value="Insert new row">
</form>

<?php
include_once("altaBajaEdicionPK.php");

if (!empty($_POST)) {
    $numero = $_POST['name_num_ident'];
    $imagen = $_POST['name_img'];
    $nombre = $_POST['name_nombre'];
    $tp1 = $_POST['name_tp1'];
    $tp2 = $_POST['name_tp2'];
    $des = $_POST['name_des'];

    $alta = new AltaBajaEdicionPK();
    $SedioDeAlta = $alta->alta($numero, $imagen, $nombre, $tp1,$tp2, $des);

    echo $SedioDeAlta;
}

?>


</body>
</html>
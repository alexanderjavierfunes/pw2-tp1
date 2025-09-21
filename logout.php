<?php
session_start();
session_destroy();

header('Location: paginaDeLogeo.php');
exit();
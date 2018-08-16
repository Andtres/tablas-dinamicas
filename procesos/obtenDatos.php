<?php
    require_once "../clases/conexion.php";
    require_once "../clases/conexion.php";

    $obj = new Crud();

    $_POST['idJuego'];

    echo json_encode($obj->obtenDatos($_POST['idJuego']));
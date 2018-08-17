<?php
    require_once "../clases/conexion.php";
    require_once "../clases/crud.php";

    $obj = new Crud();

    

    echo $obj->eliminar($_POST['idjuego']);
<?php
    require_once "../clases/conexion.php";
    require_once "../clases/crud.php";
    $datos= array(
        $_POST['nombreU'],
        $_POST['anioU'],
        $_POST['empresaU'],
        $_POST['idjuego']
    );
    
    $obj= new Crud();

    echo $obj->actualizar($datos);
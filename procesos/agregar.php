<?php
    require_once "../clases/conexion.php";
    require_once "../clases/crud.php";
    $datos= array(
        $_POST['nombre'],
        $_POST['anio'],
        $_POST['empresa']
    );
    $datos1=array('1','1','1');
    $obj= new Crud();

    echo $obj->agregarNuevo($datos);
    
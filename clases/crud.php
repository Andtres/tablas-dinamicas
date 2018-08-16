<?php
    class Crud{
        public function agregarNuevo($datos){
            $obj= new Conectar();
            $sql="INSERT INTO t_juegos(nombre, anio, empresa) VALUES('$datos[0]','$datos[1]','$datos[2]');";           
            return $obj->query($sql);
        }
    }
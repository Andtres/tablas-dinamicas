<?php
    class Conectar{
        public function __construtc(){
            $conexion=mysqli_connect('localhost','root','','juegos');
            return $conexion;
        }        
 
    }
    
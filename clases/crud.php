<?php
    class Crud{
        protected $obj;

        public function Crud(){
            $this->obj= new Conectar();
        }

        public function agregarNuevo($datos){
            
            $sql="INSERT INTO t_juegos(nombre, anio, empresa) VALUES('$datos[0]','$datos[1]','$datos[2]');";           
            return $this->obj->query($sql);
        }

        public function obtenDatos($idjuegos){
            $sql="SELECT * from t_juegos WHERE id_juego='$idjuegos';";
            $result=$this->obj->query($sql);
            $ver=$result->fetch_row();
            $datos=array(
                'id_juego' => $ver[0],
                'nombre' => $ver[1],
                'anio' => $ver[2],
                'empresa' => $ver[3]
            );
            return $datos;
        }
    }
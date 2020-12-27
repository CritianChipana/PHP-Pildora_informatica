<?php
    require('conexion.php');

    class Select extends Conexion{

        public function Select() {
            parent::Conexion();
            
        }

        public function get_productos(){
            $resultado = $this->conexion_db->query("select * from datos");
            $producto = $resultado ->fetch_all(MYSQLI_ASSOC);
            return $producto;
        }


    }


 
?>
<?php
    require('conexion.php');

    class Select extends Conexion{

        public function Select() {
            parent::Conexion();
            
        }

        public function get_productos($dato){

            // ---------------------------------------------------- PDO ------------

            $sql= "SELECT * from datos where nombre= '" . $dato . "'";
            $sentencia =$this->conexion_db->prepare($sql);
            $sentencia->execute(array());
            $resultado = $sentencia->fetchall(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();
            return $resultado;
            $this->conexion_db=null;
            // ---------------------------------------------------- MYSQLI ------------
            /*$resultado = $this->conexion_db->query("select * from datos");
            $producto = $resultado ->fetch_all(MYSQLI_ASSOC);
            return $producto;*/
        }


    }


 
?>
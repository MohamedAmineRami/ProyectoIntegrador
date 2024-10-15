<?php
    require("Conexion.php");

    class DevuelveProductos extends Conexion{ // Herencia
        public function __construct(){
            parent::__construct(); // Conectamos a la base de datos 
        }
        public function getProductos(){
            $sql="SELECT * FROM productos";
            $sentencia=$this->conexion_db->prepare($sql);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();
            return $resultado;
            $this->conexion_db=null;
            
        }

    }
?>
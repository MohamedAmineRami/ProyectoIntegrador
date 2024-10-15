<?php
    class Productos_modelo{
        private $db;
        private $productos;
        // El constructor de la clase se encarga de establecer la conexión a la base de datos y de inicializar la propiedad $productos como un array vacío.
        public function __construct() {
            require_once("Modelo/Conectar.php");
            $this->db=Conectar::conexion();
            $this->productos=array();
        }
        public function get_productos(){
            require("Modelo/paginacion.php");
            $consulta = $this->db->query("SELECT * FROM productos  LIMIT $empezar_desde,  $tamanio_pagina"); 
            while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){ // vamos recorriendo las filas que tiene el array '$consulta' (varias filas) 
                $this->productos[] = $filas; // A cada vuelta del bucle tiene que ser igual a la fila, y almacenamos ese registro que evaluamos en cada vuelta dentro de '$filas'. 
                                             // Pasar el contenido de un array '$consulta' a otro array que se llama '$productos'
            }
            return $this->productos;
        }   
    }
?>

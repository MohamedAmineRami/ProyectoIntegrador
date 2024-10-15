<?php
    class Conexion{
        protected $conexion_db;
        public function __construct(){
            try{
                $this->conexion_db=new PDO("mysql:host=sql212.infinityfree.com; dbname=if0_36052330_tienda_trustmytaste","if0_36052330","n8gxLw9tBf");
                $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->conexion_db->exec("SET CHARACTER SET utf8");
                return $this->conexion_db;
            }catch(Exception $e){
                echo "La line de error es: ". $e->getLine();
            }
        }
    }
?>
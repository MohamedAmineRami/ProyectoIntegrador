<?php
    class Conectar{
        public static function conexion(){ // Static importante
        try{
            $conexion = new PDO("mysql:host=sql212.infinityfree.com; dbname=if0_36052330_tienda_trustmytaste","if0_36052330","n8gxLw9tBf");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET utf8");
        }catch(Exception $e){
            die("Error " . $e->getMessage());
        }
        return $conexion;
    } 
}
?>

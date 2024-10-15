<?php
    require_once("Modelo/Producto_modelo.php");
    $productos = new Productos_modelo();
    $matrizProductos = $productos->get_productos();
    require_once("Vista/Producto_view.php");
?>
<?php
/**
 * Esta función se encarga de eliminar un producto de la base de datos.
 *
 * @param int $id El ID del producto que se va a eliminar.
 */
    function deleteProducto($id) {
        require_once("Conectar.php");
        $base = Conectar::conexion();
        $base->query("DELETE FROM productos WHERE id = $id");
    }
    if (isset($_GET['id'])) {
        deleteProducto($_GET['id']);
        header("location:../CRUD.php");
    }
?>
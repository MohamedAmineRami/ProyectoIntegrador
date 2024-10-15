<?php
//-------------------PAGINACIÓN--------------------------//
require_once("Conectar.php");
$base = Conectar::conexion();
$tamanio_pagina = 3;
if(isset($_GET["pagina"])){
  if($_GET["pagina"]==1){
    header("location: CRUD.php");
  }else{
    $pagina = $_GET["pagina"];
  }
}else{
  $pagina = 1;
}
$empezar_desde = ($pagina-1) * $tamanio_pagina; // Calcula el índice del primer producto que se mostrará en la página actual. Almacenamos el registro desde el cual quiero empezar a mostrar los resultados
$sql_total = "SELECT * FROM productos ";
$resultado = $base->prepare($sql_total);
$resultado->execute(array());
$numero_filas = $resultado->rowCount();
/**
 *  Redondeando hacia arriba. Esto asegura que incluso si hay un número de productos que no es un múltiplo exacto del tamaño de la página,
 *  todavía habrá una página adicional para mostrar los productos restantes.
 */
$total_paginas = ceil($numero_filas / $tamanio_pagina);

//----------------------------------------------------------//
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("Modelo/paginacion.php");
    ?>
    <?php 
   if(isset($_POST["cr"])){
    $Nom = $_POST["Nom"];
    $Pre = $_POST["Pre"];
    $Exi = $_POST["Exi"];
    $sql = "INSERT INTO productos (nombre, precio, existencia) VALUES (:miNom, :miPre, :miExi)";
    $resultado = $base->prepare($sql);
    $resultado->execute(array(":miNom"=>$Nom,":miPre"=>$Pre,":miExi"=>$Exi));
    header("location:CRUD.php");
   }
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Precio</td>
      <td class="primera_fila">Existencia</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
   
    <?php
        foreach($matrizProductos as $producto): // el bucle comienze aqui. Hemos sustituido las llaves '{}' con ':'. y todo lo que hay dentro se va a repetir como registros tengamos dentro de este array '$registros' y estan en la BD?> 
		    <?php // Por cada objeto '$persona' que tengo dentro del array '$registros' me va a escribir a cada vuelta de bucle la propiedad 'id', 'nombre'... ?>
   	<tr>
      <td>
        <?php 
            echo $producto["id"];
        ?>
      </td>
      <td><?php 
            echo $producto["nombre"];
        ?></td>
      <td><?php 
            echo $producto["precio"];
        ?></td>
      <td><?php 
            echo $producto["existencia"];
        ?></td>
      <td class="bot"><a href="Modelo/borrar.php?id=<?php echo $producto["id"]?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
      <td class='bot'><a href="Modelo/editar.php?id=<?php echo $producto["id"]?>& nombre=<?php echo $producto["nombre"]?>& precio=<?php echo $producto["precio"]?>& existencia=<?php echo $producto["existencia"]?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr>    
    
    <?php
       endforeach;  // el bucle termina aqui
    ?>
	
	<tr>
	<td></td>
      <td><input type='text' name='Nom'  size='10' class='centrado'></td>
      <td><input type='text' name='Pre'  size='10' class='centrado'></td>
      <td><input type='text' name=' Exi' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td>
    </tr>
    </table>
    <div class="pagination">
  <?php
  // ---------------------- PAGINACIÓN------------------------
  for($i=1;$i<=$total_paginas;$i++){
    echo "<a href='?pagina=" . $i . "'>" . $i . " </a>";
  }
  ?>
</div>
      
</form>
      
</body>
</html>
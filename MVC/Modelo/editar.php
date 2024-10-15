<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="../StyleCRUD.css">
</head>

<body>
<div class="center">


<h1>ACTUALIZAR</h1>

<?php
    require_once("Conectar.php");
    $base = Conectar::conexion();
    if(!isset($_POST["bot_actualizar"])){
    $id=$_GET["id"]; // nktbo nfs smya li ktbnaha f 'index' o hna kandowzo valor l url f 'href' : '?id='
    $nombre=$_GET["nombre"];
    $precio=$_GET["precio"];
    $existencia=$_GET["existencia"];
    }else{
    $id=$_POST["id"];
    $nom=$_POST["nom"];
    $pre=$_POST["pre"];
    $exi=$_POST["exi"];
    // Usamos marcadores ':miId,:miNom...' y asignamos cada valor que he almacenado en las variables del 'POST' con el parametro marcador que use en la consulta sql.
    $sql="UPDATE productos SET nombre = :miNom, precio = :miPre , existencia = :miExi WHERE id = :miId"; 
    $resulatado = $base->prepare($sql);
    $resulatado->execute(array(":miId"=>$id,":miNom"=>$nom,":miPre"=>$pre,":miExi"=>$exi));
    header("location:../CRUD.php");
    }
?>

<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <table >
    <tr>
      <td></td>
      <td><label for="id"></label>
      <input type="hidden" name="id" id="id" value="<?php echo $id?>"></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="nom"></label>
      <input class="nombre_pr" type="text" name="nom" id="nom" value="<?php echo $nombre?>"></td>
    </tr>
    <tr>
      <td>Precio</td>
      <td><label for="pre"></label>
      <input type="text" name="pre" id="pre" value="<?php echo $precio?>"></td>
    </tr>
    <tr>
      <td>Existencia</td>
      <td><label for="exi"></label>
      <input type="text" name="exi" id="exi" value="<?php echo $existencia?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
</div>

</body>
</html>
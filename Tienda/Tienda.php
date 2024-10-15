<?php
    require "Devuelve_Productos.php";
    $miProductos = new DevuelveProductos();
    $arrayProductos= $miProductos->getProductos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrustMyTast</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../MVC/StyleWeb.css">
    <style>
  body {
    margin-top: 35px;
  }
  .support-palestine,
  .support-palestine:visited {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    background: rgb(0, 0, 0);
    display: flex;
    justify-content: center;
    padding-top: 5px;
    padding-bottom: 5px;
    z-index: 10000;
    text-decoration: none;
    font-family: arial;
  }
  .support-palestine:hover,
  .support-palestine:active {
    background: black;
    display: flex;
    background: rgb(80, 80, 80);
    text-decoration: none;
  }
  .support-palestine__flag {
    margin-right: 10px;
  }

  .support-palestine__label {
    color: white;
    font-size: 12px;
    line-height: 24px;
  }
  .background {
    background: darkgreen;

    height: 21px;
  }
  .top {
    background: black;
    width: 40px;
    height: 8px;
    z-index: 1;
  }
  .middle {
    background: white;
    width: 100%;
    height: 8px;
    z-index: 1;
  }
  .triangle {
    background: auto;
    border-top: 12px solid transparent;
    border-bottom: 12px solid transparent;
    border-left: 20px solid red;
    z-index: 2;
    position: relative;
    top: -16px;
    left: 0;
  }
</style>
</head>
<body>
<a
  class="support-palestine"
  href="https://www.islamic-relief.org.uk/giving/appeals/palestine/"
  target="_blank"
  rel="nofollow noopener"
  title="Donate to support palestine"
>
  <div
    class="support-palestine__flag"
    role="img"
    aria-label="Flag of palestine"
  >
    <div class="background">
      <div class="top"></div>
      <div class="middle"></div>
      <div class="triangle"></div>
    </div>
  </div>
  <div class="support-palestine__label">Desde el río hasta el mar</div>
</a>
    <div class="menu3">
        <header><a href="../MVC/Home.php"><img class="logo" src="img/LOGO TMT (2).png" alt=""></a></header>
        <ul>
            <li> <a href="../MVC/Juegos.php">Juegos más esperados</a></li>
            <li><a href="../MVC/Generos.php">Géneros</a> </li>
            <li><a href="Tienda.php">Tienda</a> </li>
            <li><a href="../MVC/Contacto.php">Contacto</a> </li>
        </ul>
        <div class="ico"><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram" style="color: #0c0c0b;"></a></i>
            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook" style="color: #0c0c0b;"></a></i>
            <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter" style="color: #0c0c0b;"></a></i>
            <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube" style="color: #0c0c0b;"></a></i>
        </div>
        <label class="label" for="mail">Newsletter</label>
        <br> <form action="" class="input"><input type="email" placeholder="Tu mail aqui" id="mail" required> <input type="submit" value="Suscribir" id="mail" name="mail">
        </form>
    </div>
    <main>
        <div class="parafo3">
            <p><i class="fas fa-shopping-cart"></i>Tienda</p>
        </div>
        <div class="Cesta">
            <a href="../MVC/CRUD.php"><p id="Acceder"><i class="fas fa-user"></i> <br>Acceder</p></a>  <a href=""><p id="Cesta"><i class="fas fa-shopping-basket"></i> <br>Cesta</p></a>
            </div>
            <section class="tienda">
<?php
foreach($arrayProductos as $elemento){
?>
    <div class="producto">
        <a href="">
            <img src="<?php echo 'data:image/jpeg; base64,' .base64_encode($elemento['foto']); ?>" alt="producto">
            <h3><?php echo $elemento['nombre']; ?></h3>
            <h4>
                <i class="fas fa-cart-plus"></i><?php echo $elemento['precio']; ?>€
            </h4>
        </a>
    </div>
<?php
}
?>
</section>
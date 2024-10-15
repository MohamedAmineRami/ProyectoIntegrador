
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrustMyTast</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="/MVC/StyleWeb.css">
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
  <div class="support-palestine__label">Donate to support Palestine</div>
</a>
    <div class="menu">
        <header><a href="index.php"><img class="logo" src="/MVC/img/LOGO TMT (2).png" alt=""></a></header>
        <ul>
            <li> <a href="/MVC/Juegos.php">Juegos más esperados</a></li>
            <li><a href="/MVC/Generos.php">Géneros</a> </li>
            <li><a href="/Tienda/Tienda.php">Tienda</a> </li>
            <li><a href="/MVC/Contacto.php">Contacto</a> </li>
            
        </ul>

        <div class="ico"><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram" style="color: #0c0c0b;"></a></i>
            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook" style="color: #0c0c0b;"></a></i>
            <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter" style="color: #0c0c0b;"></a></i>
            <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube" style="color: #0c0c0b;"></a></i>
        </div>
        <label class="label" for="mail">Newsletter</label>
        <br> <form action="" class="input"><input type="email" placeholder="Tu mail aquì" id="mail" required> <input type="submit" value="Suscribir" id="mail" name="mail">
        </form>
    </div>

    <main>

        <div class="parafo">
            <p>¡Bienvenidos a mi blogiverso!</p>
        </div>

        <section class="noticias">
          <div class="N1"> <a href="">
                    <img src="/MVC/img/Grand_Theft_Auto_VI_logo_(with_gradient).svg.png" alt="">
                    <h4>'GTA VI': todo lo que sabemos hasta ahora del nuevo videojuego de Rockstar</h4>
          </a></div>
           <h2>Articulos recientes</h2>
        </section>

        <section class="analisis">
        <div class="analis">
            <div class="A">
                <a href=""><img src="/MVC/img/MGSV.png" alt=""></a>                 
            </div>
            <div class="A">
                <a href=""><img src="/MVC/img/BioShock.jpg" alt=""></a>    
            </div>
            <div class="A">
                <a href=""><img src="/MVC/img/Hades.jpg" alt=""></a>
            </div>
        </div>
            <h2 class="title">Últimos análisis</h2>
          </section>
        
         

        
    </main>
</body>
</html>
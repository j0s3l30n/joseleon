<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Projecto web</title>

    <!-- iconos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

   <!-- estilos -->
   <link rel="stylesheet" href="css/style.css">
  </head>
 
<body>
    
    <div id="wrapper">

      <!-- Banner -->
      <div id="banner-wraper">
        <header>
          <div class="header-inner">
            <a href="index.html" id="logo">
              <img src="https://www.urbe.edu/images/logo.gif" alt="urbe">
            </a>

            <nav>
              <a href="#" id="menu-icono">
                <i class="fa fa-bars"></i>
              </a>
              <ul>
                <li>
                  <a href="index.html">inicio</a>
                </li>
                <li>
                  <a href="contacto.html" target="_blank">Contacto</a>
                </li>
                <li>
                  <a href="aurora.html" target="_blank">Aurora 7</a>
                </li>
                <li>
                  <a href="gatos.html" target="_blank">7 curiosidades de gatos</a>
                </li>
                <li>
                  <a href="onepage.html" target="_blank">One page</a>
                </li>
                <li>
                  <a href="cripto.html" target="_blank">Que es la criptomoneda?</a>
                </li>
                <li>
                  <a href="skills.html" target="_blank">Portafolio</a>
                </li>
              </ul>
            </nav>

          </div>
        </header>

        <section class="slide-warp" id="q">
          <ul class="slider1">
            <li>
              <img src="img/slider/slider1.jpg" alt="sillita en el campo"></li>
            <li>
              <img src="img/slider/slider2.jpg" alt="chica en el campo"></li>
            <li>
              <img src="img/slider/slider3.jpg" alt="chico y su bici"></li>
          </ul>

        </section>

      </div>

      <p style="center;">Calculadora de la hipotenusa.</p>
      
      <section>

  <?php
$base = $_GET["cbase"];
$altura = $_GET["caltura"];
$Hipo = sqrt(pow($base,2) + pow($altura,2));
echo "Valor de Hipotenusa: " . $Hipo;


?>

</section>

    </div>
    

    <div>
         

          </div>

    
        <!-- scrips -->
        <script type="text/javascript">

        $(document).ready(function(){
          $('.slider1').bxSlider({
            mode: 'fade'
          })
          $('.slider2').bxSlider({
            mode: 'fade'
          })
          $('.slider3').bxSlider({
            mode: 'fade'
          })

        })

        </script>
        
    
    

<form action="Procesa.php" method="GET">
 Base:  <input type="text" id="vbase"   name="cbase" placeholders="Ingresa el valor de la Base del Tri??ngulo"/>
 Altura: <input type="text" id="valtura" name="caltura" placeholders="Ingresa el valor de la Altura del Tri??ngulo"/>
 <input type="submit" value="Enviar"/>
</form>


</body>

<footer>
<div class="banner-wrapper">
  <div class="icon-tex">
    <div class="icon-tex-icon">
      <ul class="nav">
        <li>
          <a href="index.html">inicio</a>
        </li>
        <li>
          <a href="contacto.html">Contacto</a>
        </li>
        <li>
          <a href="aurora.html">Aurora 7</a>
        </li>
        <li>
          <a href="gatos.html">7 curiosidades de gatos</a>
        </li>
        <li>
          <a href="onepage.html">One page</a>
        </li>
        <li>
          <a href="cripto.html">Que es la criptomoneda?</a>
        </li>
        <li>
          <a href="skills.html">portafolio</a>
        </li>
      </ul>

    </div>

  </div>


</div>
    </footer>


</html>
  
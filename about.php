<!DOCTYPE html>
<html>
  <head>
    <title>Ejemplo Materialize</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <nav>
    <div class="nav-wrapper red">
      <a href="/Pokedex/pokedex.php" class="brand-logo left">Pokedex</a>
      <a href="/Pokedex/Pokedex.php" data-activates="mobile" class="button-collapse right"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a class="dropdown-button" data-activates="dropdown2">Pokedex<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="tipos.php" >Tipos Elementales</a></li>
        <li><a class="dropdown-button" data-activates="dropdown3">Exportar a PDF<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button" data-activates="dropdown4">Exportar a EXCEL<i class="material-icons right">arrow_drop_down</i></a></li>
        <li class="active"><a href="about.php">Acerca de</a></li>
      </ul>
      <ul class="side-nav" id="mobile">  <!-- Menu del movil-->
      <li class="active"><a href="Pokedex.php">Pokedex</a></li>
      <li class="active"><a href="tipos.php">Tipos Elementales</a></li>
      <li><a href="about.php">Acerca de</a></li>
    </ul>
    <!-- Estructura Dropdown -->
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="#!">Kanto</a></li>
      <li><a href="#!">Johto</a></li>
      <li><a href="#!">Hoenn</a></li>
      <li><a href="#!">Sinnoh</a></li>
      <li><a href="#!">Teselia</a></li>
      <li><a href="#!">Kalos</a></li>
    </ul>
    <ul id="dropdown2" class="dropdown-content">
      <li><a href="pokedex.php">Ver Pokemon</a></li>
      <li><a href="agregarPokemon.php">Agregar Pokemon</a></li>
    </ul>
    <ul id="dropdown3" class="dropdown-content">
      <li><a href="pdf.php?orden=numero" target="_blank">Numero</a></li>
      <li><a href="pdf.php?orden=nombre" target="_blank">Nombre</a></li>
      <li><a href="pdf.php?orden=tipo1" target="_blank">Tipo 1</a></li>
      <li><a href="pdf.php?orden=tipo2" target="_blank">Tipo 2</a></li>
      <li><a href="pdf.php?orden=evolucion" target="_blank">Evolucion</a></li>
    </ul>ul>
    <ul id="dropdown4" class="dropdown-content">
      <li><a href="">Nombre</a></li>
      <li><a href="">Tipo</a></li>
      <li><a href="">Tipo2</a></li>
    </ul>
  </div>
</nav>
<section>
  <div class="parallax-container">
    <div class="parallax"><img src="http://static.panoramio.com/photos/large/18894285.jpg"></div>
  </div>
  <div class="section white">
    <div class="container">
      <div class="row">
        <div class="col s4">
          <div class="card-panel teal" >
            <img src="https://scontent.felp1-1.fna.fbcdn.net/v/t1.0-9/13118953_1284102514950547_6657449247485957666_n.jpg?oh=069fd250ace08b3aad22cf7a0ea9cc2a&oe=57D8DABA" alt="" class="circle responsive-img">
            <font color="white">
            Javier Maldonado Rivera <br>
            </font>
          </div>
        </div>
        <div class="col s4">
          <div class="card-panel teal">
            <img src="https://scontent.felp1-1.fna.fbcdn.net/v/t1.0-9/10308215_1061013697283679_8456459418784187016_n.jpg?oh=d9c5b9e3719f6d663d195a9071d04cbc&oe=57A8B0A3" alt="" class="circle responsive-img">
            <font color="white">Octavio Cuevas Conde</font>
          </div>
        </div>
        <div class="col s4">
          <div class="card-panel teal">
            <img src="https://scontent.felp1-1.fna.fbcdn.net/v/t1.0-9/12670753_10208855410240601_2414202588141524446_n.jpg?oh=3a5d25a88dc57e20ac9a5a205b86baa3&oe=57DA47E8" alt="" class="circle responsive-img">
            <font color="white">Daniel Aguirre</font>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="http://static.panoramio.com/photos/large/18894285.jpg"></div>
  </div>
</section>
<section>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript">
  $(".button-collapse").sideNav();
  $(".dropdown-button").dropdown({ hover: false });
  $('.slider').slider({full_width: true});
  $('.parallax').parallax();
  $('.slider').slider({full_width: true});
  </script>
</section>
</body>
<footer class="page-footer grey darken-3">
<div class="footer-copyright">
  <div class="container">
    © 2016 Javier Maldonado
  </div>
</div>
</footer>
</html>
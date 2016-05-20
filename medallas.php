<!DOCTYPE html>
  <html>
    <head>
        <title>Ejemplo Materialize</title>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
      <nav>
        <div class="nav-wrapper red">
         <a href="/Pokedex" class="brand-logo left">Pokedex</a>
         <a href="/Pokedex" data-activates="mobile" class="button-collapse right"><i class="material-icons">menu</i></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
           <li><a class="dropdown-button" data-activates="dropdown2">Pokedex<i class="material-icons right">arrow_drop_down</i></a></li>
           <li><a href="tipos.php" >Tipos Elementales</a></li>
           <li class="active"><a class="dropdown-button" data-activates="dropdown1">Medallas<i class="material-icons right">arrow_drop_down</i></a></li>
           <li><a href="about.php">Acerca de</a></li>
          </ul>
          <ul class="side-nav" id="mobile">  <!-- Menu del movil-->
           <li><a href="Pokedex.php">Pokedex</a></li>
           <li><a href="tipos.php">Tipos Elementales</a></li>
           <li class="active"><a href="medallas.php">Medallas</a></li>
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
        </div>
      </nav>
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

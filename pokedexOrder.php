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
        <a href="/Pokedex/pokedex.php" class="brand-logo left">Pokedex</a>
        <a href="/Pokedex/Pokedex.php" data-activates="mobile" class="button-collapse right"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li class="active"><a class="dropdown-button" data-activates="dropdown2">Pokedex<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a href="tipos.php" >Tipos Elementales</a></li>
          <li><a class="dropdown-button" data-activates="dropdown3">Exportar a PDF<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-button" data-activates="dropdown4">Exportar a EXCEL<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a href="about.php">Acerca de</a></li>
        </ul>
        <ul class="side-nav" id="mobile">  <!-- Menu del movil-->
        <li class="active"><a href="Pokedex.php">Pokedex</a></li>
        <li><a href="tipos.php">Tipos Elementales</a></li>
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
        <li class="active"><a href="pokedex.php">Ver Pokemon</a></li>
        <li><a href="agregarPokemon.php">Agregar Pokemon</a></li>
      </ul>
      <ul id="dropdown3" class="dropdown-content">
        <li><a href="pdf.php?orden=numero" target="_blank">Numero</a></li>
        <li><a href="pdf.php?orden=nombre" target="_blank">Nombre</a></li>
        <li><a href="pdf.php?orden=tipo1" target="_blank">Tipo 1</a></li>
        <li><a href="pdf.php?orden=tipo2" target="_blank">Tipo 2</a></li>
        <li><a href="pdf.php?orden=evolucion" target="_blank">Evolucion</a></li>
      </ul>          <ul id="dropdown4" class="dropdown-content">
      <li><a href="">Nombre</a></li>
      <li><a href="">Tipo</a></li>
      <li><a href="">Tipo2</a></li>
    </ul>
  </div>
</nav>
<section>
  <section>
    <?php
    // conectar
    $m = new MongoClient();
    // seleccionar una base de datos
    $db = $m->Pokemon;
    // seleccionar una colección (equivalente a una tabla en una base de datos relacional)
    $colección = $db->Pokedex;
    // encontrar todo lo que haya en la colección
    $cursor = $colección->find();
    
    switch ($_GET['orden']) {
    case 'numero':
    $cursor->sort(array('numero' => 1));
    break;
    case 'nombre':
    $cursor->sort(array('nombre' => 1));
    break;
    case 'tipo1':
    $cursor->sort(array('tipos.0' => 1));
    break;
    case 'tipo2':
    $cursor->sort(array('tipos.1' => 1));
    break;
    case 'evolucion':
    $cursor->sort(array('evolucion' => 1));
    break;
    }
    
    ?>
    <table>
      <thead>
        <tr>
          <th><center><a class="waves-effect waves-light btn" href="pokedexOrder.php?orden=numero">Numero</a></center></th>
          <th><center><a class="waves-effect waves-light btn" href="pokedexOrder.php?orden=nombre">Nombre</a></center></th>
          <th><center><a class="waves-effect waves-light btn" href="pokedexOrder.php?orden=tipo1">Tipo1</a></center></th>
          <th><center><a class="waves-effect waves-light btn" href="pokedexOrder.php?orden=tipo2">Tipo2</a></center></th>
          <th><center><a class="waves-effect waves-light btn" href="pokedexOrder.php?orden=evolucion">Evolucion</a></center></th>
          <th><center>Imagen</th>
          <th><center></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($cursor as $item): ?>
        <tr>
          <td><center><?php echo $item['numero']; ?></center></td>
          <td><center><?php echo $item['nombre']; ?></center></td>
          <td><center><?php echo $item['tipos'][0]; ?></center></td>
          <td><center><?php echo $item['tipos'][1]; ?></center></td>
          <td><center><?php echo $item['evolucion']; ?></center></td>
          <td><center><img src="<?php echo $item['imagen']; ?>" alt="" class="circle responsive-img" width="50%"></center></td>
          <td><center><a class="waves-effect waves-light btn"><i class="material-icons left">mode_edit</i>Editar</a></center></td>
          <td><center><a class="waves-effect waves-light btn"><i class="material-icons left">delete</i>Borrar</a></center></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
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
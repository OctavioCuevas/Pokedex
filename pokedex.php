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
      </ul>
      <ul id="dropdown4" class="dropdown-content">
        <li><a href="excel.php?orden=numero" target="_blank">Numero</a></li>
        <li><a href="excel.php?orden=nombre" target="_blank">Nombre</a></li>
        <li><a href="excel.php?orden=tipo1" target="_blank">Tipo 1</a></li>
        <li><a href="excel.php?orden=tipo2" target="_blank">Tipo 2</a></li>
        <li><a href="excel.php?orden=evolucion" target="_blank">Evolucion</a></li>
      </ul>
    </div>
  </nav>
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
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($cursor as $item): ?>
        <tr>
          <td><center><?php echo $item['numero']; ?></center></td>
          <td><center><?php echo $item['nombre']; ?></center></td>
          <td width="10%"><center><img width="70%" src="<?php echo setTypes($item['tipos'][0]); ?>"/></center></td>
          <td width="10%"><center><img width="70%" src="<?php echo setTypes($item['tipos'][1]); ?>" width="35%"/></center></td>
          <td><center><?php echo $item['evolucion']; ?></center></td>
          <td width="10%"><center><img src="<?php echo $item['imagen']; ?>" alt="" class="circle responsive-img" width="200%"></center></td>
          <td><center><a href="editarPokemon.php?id=<?php echo $item['numero'];?>" class="waves-effect waves-light btn"><i class="material-icons left">mode_edit</i>Editar</a></center></td>
          <td><center><a class="waves-effect waves-light btn modal-trigger" data-target="modal1" <?php $id = $item['numero']; ?>><i class="material-icons left">delete</i>Borrar</a></center></td>
        </tr>
        <?php endforeach;
        function setTypes($type){
        switch ($type) {
        case 'PLANTA':
        $url="http://vignette3.wikia.nocookie.net/es.pokemon/images/d/d6/Tipo_planta.gif/revision/latest?cb=20140127195157";
        break;
        case 'VENENO':
        $url="http://vignette3.wikia.nocookie.net/es.pokemon/images/1/10/Tipo_veneno.gif/revision/latest?cb=20140127195142";
        break;
        case 'FUEGO':
        $url="http://vignette1.wikia.nocookie.net/es.pokemon/images/c/ce/Tipo_fuego.gif/revision/latest?cb=20140127195210";
        break;
        case 'VOLADOR':
        $url="http://vignette3.wikia.nocookie.net/es.pokemon/images/e/e1/Tipo_volador.gif/revision/latest?cb=20140127195141";
        break;
        case 'AGUA':
        $url="http://vignette4.wikia.nocookie.net/es.pokemon/images/9/94/Tipo_agua.gif/revision/latest?cb=20140127195223";
        break;
        case 'ACERO':
        $url="http://vignette3.wikia.nocookie.net/es.pokemon/images/d/d9/Tipo_acero.gif/revision/latest?cb=20140127195225";
        break;
        case 'BICHO':
        $url="http://vignette1.wikia.nocookie.net/es.pokemon/images/f/fe/Tipo_bicho.gif/revision/latest?cb=20140127195222";
        break;
        case 'DRAGON':
        $url="http://vignette3.wikia.nocookie.net/es.pokemon/images/0/01/Tipo_drag%C3%B3n.gif/revision/latest?cb=20140127195213";
        break;
        case 'ELECTRICO':
        $url="http://vignette4.wikia.nocookie.net/es.pokemon/images/1/1b/Tipo_el%C3%A9ctrico.gif/revision/latest?cb=20140127195211";
        break;
        case 'FANTASMA':
        $url="http://vignette1.wikia.nocookie.net/es.pokemon/images/4/47/Tipo_fantasma.gif/revision/latest?cb=20140127195210";
        break;
        case 'HIELO':
        $url="http://vignette4.wikia.nocookie.net/es.pokemon/images/4/40/Tipo_hielo.gif/revision/latest?cb=20140127195200";
        break;
        case 'LUCHA':
        $url="http://vignette1.wikia.nocookie.net/es.pokemon/images/b/b7/Tipo_lucha.gif/revision/latest?cb=20140127195159";
        break;
        case 'NORMAL':
        $url="http://vignette3.wikia.nocookie.net/es.pokemon/images/3/32/Tipo_normal.gif/revision/latest?cb=20140127195158";
        break;
        case 'HADA':
        $url="http://vignette2.wikia.nocookie.net/es.pokemon/images/b/bc/Tipo_hada.gif/revision/latest?cb=20140127195208";
        break;
        case 'PSIQUICO':
        $url="http://vignette4.wikia.nocookie.net/es.pokemon/images/1/15/Tipo_ps%C3%ADquico.gif/revision/latest?cb=20140127195156";
        break;
        case 'ROCA':
        $url="http://vignette2.wikia.nocookie.net/es.pokemon/images/e/e0/Tipo_roca.gif/revision/latest?cb=20140127195144";
        break;
        case 'TIERRA':
        $url="http://vignette3.wikia.nocookie.net/es.pokemon/images/1/1d/Tipo_tierra.gif/revision/latest?cb=20140127195143";
        break;
        case 'N/A':
        $url="http://chk.edu.mx/2012/images/FONDO%20BLANCO%20NUEVO.gif";
        break;
        }
        return $url;
        }
        ?>
      </tbody>
    </table>
  </section>
  <section>
    <div id="modal1" class="modal">
      <div class="modal-content">
        <h4>Advertencia</h4>
        <p>¿Esta seguro que desea eliminar este elemento?</p>
      </div>
      <div class="modal-footer">
        <a href="pokemonElminado.php?id=<?php echo $id; ?>" class="modal-action modal-close waves-effect waves-green btn-flat">Eliminar</a>
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
      </div>
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
    $('.modal-trigger').leanModal();
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
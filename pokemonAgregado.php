<?php
// conectar
$m = new MongoClient();
// seleccionar una base de datos
$db = $m->Pokemon;
// seleccionar una colección (equivalente a una tabla en una base de datos relacional)
$colección = $db->Pokedex;
$Pokemon = array();
$Pokemon['numero'] = (($colección->count()) + 1);
$Pokemon['nombre'] = $_POST['nombre'];
$Pokemon['tipos'][0] = $_POST['tipo1'];
$Pokemon['tipos'][1] = $_POST['tipo2'];
$Pokemon['evolucion'] = $_POST['evolucion'];
$Pokemon['imagen'] = $_POST['imagen'];
$colección->insert($Pokemon);
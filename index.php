<?php

require_once './conexion/db.php';
require_once './persistencia/Crud.php';
require_once './persistencia/modelos/ModeloGenerico.php';
require_once './persistencia/modelos/Colores.php';




$colores = new Crud("colores");
$lista = $colores->get();
echo "<pre>";
var_dump($lista);
echo "</pre>";

<?php
/*
* Archivo de configuración para nuestra aplicación modularizada.
* Definimos valores por defecto y datos para cada uno de nuestros módulos.
*/
define('MODULO_DEFECTO', 'home');
define('LAYOUT_DEFECTO', 'layout_simple.php');
define('MODULO_PATH', realpath('./modulos/'));
define('LAYOUT_PATH', realpath('./layouts/'));

$conf['home'] = array(
       'archivo' => 'home.php',
       'layout' => LAYOUT_DEFECTO );
$conf['articulo'] = array(
       'archivo' => 'art.php' );
$conf['imp_art'] = array(
       'archivo' => $conf['articulo']['archivo'],
       'layout' => 'imprimir.php' );
?>


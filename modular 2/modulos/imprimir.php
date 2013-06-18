<?
$uri = "http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
?>
<html>
<head>
   <title>Versión para Imprimir</title>
</head>
<style type="text/css">
.imprimir {
   margin: 3%;
   border: 2px solid black;
   padding: 2%;
}
#pie {
   font-size: 8pt;
}
</style>
<body>
<div class="imprimir">
<?
   if (file_exists( $path_modulo )) include( $path_modulo );
   else die('Error al cargar el módulo <b>'.$modulo.'. No existe el archivo <b>'.$conf[$modulo]['archivo'].'</b>');
?>
<i id="pie">Este artículo se puede encontrar en : <a href="<?=$uri?>"><?=$uri?></a></i>
</div>
</body>
</html>


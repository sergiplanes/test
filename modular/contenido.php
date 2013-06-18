<? switch ($_GET["seccion"]) {
	case 'noticias';
	 include("modulos/principal.php");
	 break;
	 case 'linux';
	 include("modulos/linux.php");
	 break;
	 case 'descargar';
	 include("modulos/descargar.php");
	 break;
	 default: include("modulos/principal.php");
}

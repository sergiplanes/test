<html>
<head>
   <title>Tu Sitio Modular</title>
</head>
<body bgcolor="#9999cc">
<basefont color="white" face="Verdana" />
<?php include('includes/header.html'); ?>
<table width="100%" border="0" cellspacing="1" cellpadding="1">
   <tr>
       <td width="140" bgcolor="#5b69a6"> </td>
       <td>
<?
   if (file_exists( $path_modulo )) include( $path_modulo );
   else die('Error al cargar el módulo <b>'.$modulo.'. No
   existe el archivo <b>'.$conf[$modulo]['archivo'].'</b>');
?>
       </td>
   </tr>
</table>
<?php include('includes/footer.html'); ?>
</body>
</html>


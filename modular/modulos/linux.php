<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<span style="font-size: medium;">Para  instalar el servidor apache:</span>
<pre lang="powershell" line="1" escaped="true">$ sudo apt-get install apache2</pre>
<span style="font-size: medium;">Para instalar MySQL server (pedira contraseña)</span>
<pre lang="powershell" line="1" escaped="true">$ sudo apt-get install mysql-server</pre>
<span style="font-size: medium;">Para instalar PHP en su versión más reciente
</span><!--more-->
<pre lang="powershell" line="1" escaped="true">$ sudo apt-get install php5</pre>
<span style="font-size: medium;">Para instalar la extensión MySQL para PHP</span>
<pre lang="powershell" line="1" escaped="true">$ sudo apt-get install php5-mysql</pre>
<span style="font-size: medium;">Para instalar la extencion xDebug para PHP</span>
<pre lang="powershell" line="1" escaped="true">$ sudo apt-get install php4-xdebug</pre>
<span style="font-size: medium;">Para tener una configuracion en apache habilitar modo de directorio de usuario</span>
<pre lang="powershell" line="1" escaped="true">$ sudo a2enmod userdir</pre>
<span style="font-size: medium;">Se crea una carpeta en el directorio home con el numbre de public_html</span>
<pre lang="powershell" line="1" escaped="true">$ mkdir public_html</pre>
<span style="font-size: medium;">Ahora se reinicia el servidor Apache</span>
<pre lang="powershell" line="1" escaped="true">$ sudo /etc/init.d/apache2 restart</pre>
Aqui les dejo el videotutorial en youtube:<br />
<object width="640" height="385"><param name="movie" value="http://www.youtube.com/v/Qqb9ljwyK8k&hl=es_ES&fs=1&"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/Qqb9ljwyK8k&hl=es_ES&fs=1&" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="640" height="385"></embed></object>
</body>
</html>

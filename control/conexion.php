<?php
	$db='natuapp';
	$con=mysql_connect('localhost','root','jhersonos') or die('Problema con la conexion');
	mysql_select_db($db,$con)or die('Problema con la base de datos');
?>
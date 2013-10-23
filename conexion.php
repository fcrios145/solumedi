<?php 

	$server="localhost";
	$usuario="root";
	$pass="";
	$db="pagina";
	$link=mysql_connect($server,$usuario,$pass)or die (exit(mysql_error()));
	mysql_select_db($db);

 ?>
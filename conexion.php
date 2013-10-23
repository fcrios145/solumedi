<?php 

	$link = mysql_connect("localhost","root","rios");
	if($link) {
		mysql_select_db("soluSql",$link); 
	} else {
		echo "No se pudo conectar";
	}
 ?>
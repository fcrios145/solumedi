<?php 

	$link = mysql_connect("localhost","root","rios");
	if($link) {
		mysql_select_db("soluweb",$link);
	} else {
		echo "No se pudo conectar";
	}

	$pagina = $_GET['esp'];

	
	$query = "SELECT * FROM v_especialidad WHERE id =".$pagina;

	$resultado = mysql_query($query);

	if (!$resultado) {
    	$mensaje  = 'Consulta no valida: ' . mysql_error() . "\n";
   	 	$mensaje .= 'Consulta completa: ' . $query;
    	die($mensaje);
	}

	while ($fila = mysql_fetch_assoc($resultado)) {	    
	    $titulo = $fila['nombre'];
	    $descripcion = $fila['descripcion'];
	    $doctor = $fila['nombre_doctor'];
	}


 ?>

<html>
<head>
	<title>Soluciones M&eacute;dicas Integrales</title>
	<link rel="stylesheet" href="css/reseter.css" type="text/css"/>
	<link rel="stylesheet" href="css/estiloGen.css" type="text/css"/>
	<link rel="stylesheet" href="css/menu.css" type="text/css"/>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>	
	<script src="js/jquery.bxslider/jquery.bxslider.min.js"></script>
	<link href="js/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />
	<script src="js/script.js"></script>

	
</head>
<body>


	<div id="wrapper">
		<div id="header">

			<span class="tel "id="telefono">TEL. (6691) 12 02 39</span>
			<span class="tel" id="mail">E-mail: solumedi1@gmail.com</span>
			<a href="index.php"><img id="logo" src="img/logo.png" alt="soluciones medicas integrales"></a>

			<ul class="menu">

				<li><a href="#" alt="home">HOME</a></li>
				<li><a href="#" alt="especialidades">ESPECIALIDADES</a>
					<ul>
						<li><a href="especialidades.php?esp=1">Reumatolog&iacutea</a></li>
						<li><a href="especialidades.php?esp=2">Ortopedia</a></li>
						<li><a href="especialidades.php?esp=3">Nefrolog&iacutea</a></li>
						<li><a href="especialidades.php?esp=4">Nutrici&oacuten</a></li>
						<li><a href="especialidades.php?esp=5">Centro de infusi&oacuten</a></li>
						<li><a href="especialidades.php?esp=6">Endocrinolog&iacutea</a></li>
						<li><a href="especialidades.php?esp=7">Hematolog&iacutea</a></li>
						<li><a href="especialidades.php?esp=8">Terapia Fis&iacuteca</a></li>
						
					</ul>
				</li>
					
				<li><a href="#" alt="servicios">SERVICIOS</a>
					<ul>
						<li><a href="#">Servicio 1</a></li>
						<li><a href="#">Servicio 2</a></li>
						<li><a href="#">Servicio 3</a></li>
					</ul>
				</li>

                                <li><a href="#mapas" alt="citas">UBICACI&Oacute;N</a></li>
				<li><a href="#quienesSomosTitulo" alt="quienesSomos">&iquestQUIENES SOMOS?</a></li>
				<li><a href="#">CONTACTO</a></li>
				
			</ul>
			<a href="#"><img id="logofb" class="sociales" src="img/logoFb.gif" alt=""></a>
			<a href="#"><img id="logotw" class="sociales" src="img/logoTw.gif" alt=""></a>

		</div>
		<div id="content">
				
				<h1><?php echo $titulo ?></h1>

				<p><?php echo $descripcion ?></p>

				<span><?php echo $doctor ?></span>

			<div id="footer2">
				<ul>
					<li><a href="#">LINK 1</a></li>
					<li><a href="#">LINK 2</a></li>
					<li><a href="#">LINK 3</a></li>
					<li><a href="#">LINK 4</a></li>
					<li><a href="#">LINK 5</a></li>
				</ul>

				<a href="#"><img id="logo1" src="img/logoFb.gif" alt=""></a>
				<a href="#"><img id="logo2" src="img/logoTw.gif" alt=""></a>
				<a class="twitter-timeline"  href="https://twitter.com/search?q=%23salud"  data-widget-id="392090790513483777">Tweets sobre "#salud"</a>
				<div id="twitter">
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>	

				<img class="separadores" id="separador1" src="img/separador3.png" alt="">
				<img class="separadores" id="separador2" src="img/separador3.png" alt="">
				<span id="telefono2">TEL. (6691) 12 02 39  E-mail: solumedi1@gmail.com</span>
				                                
					
				</div>			

			</div>
                        <iframe id="mapas" width="290" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=209958701652227074095.0004e940d34943704e043&amp;ie=UTF8&amp;t=m&amp;ll=23.247231,-106.429206&amp;spn=0.002169,0.003326&amp;z=17&amp;output=embed"></iframe><br />


		</div>


		

	</div>	


	<div id="footer" class="pie">


	</div>
	<div id="footer3">                        

	</div>

</body>
</html>
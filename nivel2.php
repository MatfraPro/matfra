<?php require('warnings.php'); ?>


<!DOCTYPE html>
<html>  
<head>   
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nivel 2</title>

      <link href="jquery/jquery.mobile.icons-1.4.5.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="img/icono.ico">
	<link rel="stylesheet"  href="css2/themes/default/jquery.mobile-1.2.0.css" />
    <link href="css2/themes/naranja.css" rel="stylesheet" />
      <link href="css2/themes/naranja.min.css" rel="stylesheet" />
	<script src="js/jquery.js"></script> 
	<script src="jquery/estilos.js"></script>
	<script src="js/jquery.mobile-1.2.1.js"></script>	
</head> 
<body> 
	<div data-role="page" class="type-interior">
		<div data-role="header" data-theme="b"> 

		<h1>MATFRA: MENÚ NIVEL 2</h1>
	</div><!-- /header -->
	<div data-role="content">
		<ul data-role="listview" data-split-icon="gear" data-split-theme="d">
	<li><a href="propias.php" target="_parent">
				<h3>Fracciones Propias</h3>
				<p>Fracciones Propias</p>
			</a><a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Fracciones impropias</a>				
		</li>
		<li><a href="impropias.php" target="_parent">
				<h3>Fracciones Impropias</h3>
				<p>Fracciones Impropias</p>
				</a><a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Fracciones impropias</a>				
		</li>
		 <li><a href="mixtas.php" target="_parent">	
				<h3>Fraciones Mixtas</h3>
				<p>Fracciones Mixtas</p>
				</a><a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Fraciones mixtas</a>				
		</li>
		<li><a href="equivalentes.php" target="_parent">
				<h3>Fracciones Equivalentes</h3>
				<p>Fracciones Equivalentes</p>
				</a><a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Fracciones equivalentes<b></b></a>				
		</li>
		<li><a href="cerrarsesion.php" target="_parent">
			<!--	<img src="images/reg.png" width="20" height="20" /> -->
				<h3>Cerrar sesion</h3>
				<p>Cerrar sesion</p>
				</a><a href="cerrarsesion.php" data-rel="popup" data-position-to="window" data-transition="pop">Cerrar sesion<b></b></a>				
		</li>
			<li><a href="info.php" target="_parent">
				<h3>Acerca de Mi</h3>
				<p>Acerca de Mi</p>
				</a><a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Fracciones equivalentes<b></b></a>				
		</li>
		
		</ul>		
	</div><!-- /content -->
	<div data-role="footer" class="footer-docs" data-theme="c">
		<p class="jqm-version"></p> 
		<p>Copyright 2015: Instituto Tecnológico de Tlaxiaco</p>
	</div>
	</div><!-- /page -->
	</body>
</html>
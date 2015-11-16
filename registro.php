<?php @require('warnings.php'); ?>
<?php @require('conexion.php'); ?>

<!DOCTYPE html>
<html> 
<head>   
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aprendiendo Fracciones</title>
	<link rel="shortcut icon" href="img/icono.ico">
	<link rel="shortcut icon" href="img/icono.ico">
    <link rel="stylesheet"  href="css2/themes/default/jquery.mobile-1.2.0.css" />
	<link rel="stylesheet" href="css2/themes/estilo.css" />
	<link href="css2/themes/naranja.css" rel="stylesheet" />
    <link href="css2/themes/naranja.min.css" rel="stylesheet" />
	<script src="js/jquery.js"></script> 
	<script src="jquery/estilos.js"></script>
	<script src="js/jquery.mobile-1.2.1.js"></script>	
</head>  
<body> 
<div data-role="page" class="type-interior">
		<div data-role="header" data-theme="b">
		<h1>MATFRA:Registro</h1>
	     </div><!-- /header -->

     <div data-role="content">
		 <form name="formreg" action="consultas.php" method="POST">
          <br></br>
          <label for="basic"/>Usuario:</label>
          <input type="text" name="usuario"  value="" required />
    	  <br></br>
    	  <label for="basic"/>Password:</label>
          <input type="password"  name="password"  value="" required />
    	  <br></br>
		   <input type="hidden" name="fn" value="1" />
		  <input type="submit" value="Registrar" />
		 
		 </form> 
	</div> 


	<div data-role="footer" class="footer-docs" data-theme="c">
		<p class="jqm-version"></p> 
		<p>Copyright 2015: Instituto Tecnológico de Tlaxiaco</p>
	</div>
</div><!-- /page -->
	</body>
</html>
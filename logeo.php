<?php require('warnings.php'); ?>
<?php
@session_start();
if (@$_SESSION["autentificado"] == "admin") {
	header("Location: nivel2.php");
	exit();
}	
?> 
<!DOCTYPE html>
<html> 
<head>   
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aprendiendo Fracciones</title>
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
		<a href="index.php" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<h1>MATFRA:LOGUEO</h1>
	</div><!-- /header -->

<div data-role="content">
		 <form name="form1" action="logeo.php" method="POST">
		 <br></br>
          <label for="basic"/>Usuario:</label>
          <input type="text" name="usuario"  value="" required />
    	  <br></br>
    	  <label for="basic"/>Password:</label>
          <input type="password"  name="password"  value="" required />
          <br></br>
		  <input type="hidden" name="fn" value="20" />
		  <input type="submit" value="Iniciar Sesion" />
	 <a href="registro.php" data-role="button"  data-theme="e" >Registrate Ahora</a>	  
	 </form>	
    </div>
		  <?php
			@$usuario=$_REQUEST['usuario'];
			@$password=$_REQUEST['password'];
			if (isset($usuario)and isset($password)){
    			require('conexion.php');	
    			$consulta="select * from usuarios where  usuario='$usuario' and password='$password'";
    			@$rs=mysql_query($consulta);
    			@$rs=mysql_num_rows($rs); 
    			if($rs>0)
    			{	session_start();
    				$_SESSION["autentificado"]= $usuario;
					header("Location: nivel2.php");
					exit();
				}else {
    				echo '<h3>Cuenta o Password incorrecto</h3>';	
    				
    			}
			}		
		?>



	<div data-role="footer" class="footer-docs" data-theme="c">
		<p class="jqm-version"></p> 
		<p>Copyright 2015: Instituto Tecnológico de Tlaxiaco</p>
	</div>
	</div><!-- /page -->
	</body>
</html>
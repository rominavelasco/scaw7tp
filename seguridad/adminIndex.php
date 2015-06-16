<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ------------------------------------------------------------------------ -->
  <meta charset="utf-8">
  <title>Archivos</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  ------------------------------------------------------------------------ -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  ------------------------------------------------------------------------ -->
  <!--<link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link href="css/font-releway.css" rel="stylesheet" type="text/css">-->
  <link href="css/font.css" rel="stylesheet" type="text/css">
  
  <!-- CSS
  ------------------------------------------------------------------------ -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/mystyle.css">
  <link rel="stylesheet" type="text/css" href="css/estilosdos.css">
  <!-- Favicon
  -------------------------------------------------------------------------->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>
	<!-- Comienzo de Encabezado
	-------------------------------------------------------------------------->
	<div class="encabezado"> 
			<ul class="navbar">
				<li class="navbar2"><a class="navbar3" href="adminIndex.php">Home</a></li>
				<li class="navbar2"><a class="navbar3" href="adminManejoUser.php">Control User</a></li>
				
			
			</ul>
	</div>
				  
	<!-- Comienzo zona enlaces de archivos
	-------------------------------------------------------------------------->			  
	<div class="container1">  
		<div class="enlacesArchivos">
		<h4> Todos los Archivos Compartidos </h4>
		<div class="archivos">
			
			<ul class="archivo">
				<li class="enlace"><a class="enlace1" href="#home">Introducir nombre de archivo o ubicacion de archivo</a></li>
				<li class="enlace"><a class="enlace1" href="#home">Introducir nombre de archivo o ubicacion de archivo</a></li>
				<li class="enlace"><a class="enlace1" href="#home">Introducir nombre de archivo o ubicacion de archivo</a></li>
				<li class="enlace"><a class="enlace1" href="#home">Introducir nombre de archivo o ubicacion de archivo</a></li>
			<?php
			    echo  '<li class="enlace"><a class="enlace1" href="#algo" target="_blank">preparado para codigo php</a></li>' ;
			?>
			
			</ul>	
				
				
				
				
				<!--<p><a class="enlace" href="#home">Home</a></p>
				<p><a class="enlace" href="#news">News</a></p>
				<p><a class="enlace" href="#contact">Contact</a></p>
				<p><a class="enlace" href="#about">About</a></p>
				<p><a class="enlace" href="#home">Home</a></p>
				<p><a class="enlace" href="#news">News</a></p>
				<p><a class="enlace" href="#contact">Contact</a></p>
				<p><a class="enlace" href="#about">About</a></p>-->
		
		</div>
	
        </div>
		
	<!-- Comienzo zona uploads
	-------------------------------------------------------------------------->
	    <div class="upload">
		
		<h4>Editar Archivo</h4>
		<!-- Comienzo form upload
			------------------------------------------------------------------------E-->	
			<div class="form3">
			
			
			<!-- El tipo de codificación de datos, enctype, se DEBE especificar como a continuación -->
				<form enctype="multipart/form-data" action="__URL__" method="POST">
				
					<!-- MAX_FILE_SIZE debe preceder el campo de entrada de archivo -->
					<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
				
					<div class="myForm1">
							<div class="mylabel1">
								<label for="exampleMessage">Enviar este archivo:</label>
							</div>
							
							<div class="myinput">
							<!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
								<input class="u-full-width" name="userfile" type="file"/>
							</div>
							
							<div class="mybutton1">
								<input class="button-primary" type="submit" value="Enviar Archivo">
							</div>
					</div>
				</form>
			</div>
			
	    </div>
	
	
	
	</div> <!-- fin div conteneiner --> 
	<!-- cominezo de pie de pagina
	  ------------------------------------------------------------------------ -->
	<div class="footer"> <!-- comienzo div footer -->
    <p class="textpie"> Tecnicatura Desarollo Web &#47; Seguridad y Calidad en las Aplicaciones Web &#47; 1C2015</p> 
	</div>		
  		
  
</body>
</html>
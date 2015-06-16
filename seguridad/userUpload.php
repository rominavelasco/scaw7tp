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
  ------------------------------------------------------------------------・-->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>
	<!-- Comienzo de Encabezado
	------------------------------------------------------------------------・-->
	<div class="encabezado"> 
			<ul class="navbar">
				<li class="navbar2"><a class="navbar3" href="userIndex.php">Home</a></li>
				<li class="navbar2"><a class="navbar3" href="userUpload.php">Upload</a></li>
			</ul>
	</div>
				  
	<!-- Comienzo Contedor 
	------------------------------------------------------------------------・-->			  
	<div class="container3">  
		<div class="upload">
			
			<h4>Subir Archivo</h4>
		<!-- Comienzo form upload
			------------------------------------------------------------------------・-->	
			<div class="form3">
			
			
			<!-- El tipo de codificaci de datos, enctype, se DEBE especificar como a continuaci -->
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
			
			<h4>Habilitar permisos</h4>
		<!-- Comienzo zona de permisos
			------------------------------------------------------------------------・-->
			<div class="permisos">
			<form>
				<div class="sub-rol">
					nombreUsuario 	<input type="checkbox" name="subRol" value="editor"> Editor
									<input type="checkbox" name="subRol" value="lector"> Lector 
				</div>
			    <div class="sub-rol">
					nombreUsuario 	<input type="checkbox" name="subRol" value="editor"> Editor
									<input type="checkbox" name="subRol" value="lector"> Lector 
				</div>
			    <div class="sub-rol">
					nombreUsuario 	<input type="checkbox" name="subRol" value="editor"> Editor
									<input type="checkbox" name="subRol" value="lector"> Lector 
				</div>
				
				<?php
			    echo  	'<div class="sub-rol">
							<div class="name-User"> 
								nombreUser 	
							</div>
							<div class="input-User">
								<input type="checkbox" name="subRol" value="editor"> Editor
								<input type="checkbox" name="subRol" value="lector"> Lector 
							</div>
						</div>' ;
				?>
         			
			
			
			</form>
			</div>
		
		</div> <!-- fin div upload archivos-->
	</div><!-- fin div contenedor --> 
	
	<!-- cominezo de pie de pagina
	  ------------------------------------------------------------------------ -->
	<div class="footer"> <!-- comienzo div footer -->
    <p class="textpie"> Tecnicatura Desarollo Web &#47; Seguridad y Calidad en las Aplicaciones Web &#47; 1C2015</p> 
	</div>		
  		
  
</body>
</html>

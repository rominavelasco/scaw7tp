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
		<h4> Usuarios Activos </h4>
		<div class="archivos">
			
			<ul class="archivo">
				<li class="control-user">user1</li>
				<li class="control-user">user2</li>
				<li class="control-user">user3</li>
				<li class="control-user">user4</li>
			<?php
			    echo  '<li class="control-user">user5 codigo php</li>' ;
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
		
	<!-- FORMULARIOS ABM
	-------------------------------------------------------------------------->
	    <div class="upload">
		
		<h4>Editar Usuarios</h4>
		<!-- Comienzo formularios ABM
			------------------------------------------------------------------------・-->	
			
			<!-- FORMULARIO ALTA
			------------------------------------------------------------------------・-->
			
			<div class="form3">
			<h4>Habilitar Usuarios</h4>
			<form>
				
				<div class="myForm">
						<div class="mylabel">
						<label for="exampleEmailInput">Nombre Usuario</label>
				</div>
				<div class="myinput">
						<input class="u-full-width" type="text" placeholder="Nombre Usuario" id="txtName">
						</div>
				</div>
			    
				<div class="mybutton">
					<input class="button-primary" type="submit" value="Enviar">
					<input class="button-primary" type="reset" value="Reset">
			    </div>
			</form>
			</div>	
			
			
			
			<!-- FORMULARIO MODIFICACION
			------------------------------------------------------------------------・-->
			<div class="form3">
			<h4>Actullizar Usuarios</h4>
			<form>
				
				<div class="myForm">
						<div class="mylabel">
						<label for="exampleEmailInput">Nombre Usuario</label>
				</div>
				<div class="myinput">
						<input class="u-full-width" type="text" placeholder="Nombre" id="txtName">
						</div>
				</div>
			    
				<div class="myForm">
					  <div class="mylabel">
					  <label for="exampleEmailInput">Ingrese Mail</label>
					  </div>
					  <div class="myinput">
					  <input class="u-full-width" type="text" placeholder="test@mailbox.com" id="txtEmail">
					  </div>
					</div>
				
				<div class="mybutton">
					<input class="button-primary" type="submit" value="Enviar">
					<input class="button-primary" type="reset" value="Reset">
			    </div>
			</form>
			</div>
			
			
			<!-- FORMULARIO BAJA
			------------------------------------------------------------------------・-->
			
			<div class="form3">
			<h4>Eliminacion Usuario</h4>
			<form>
				
				<div class="myForm">
						<div class="mylabel">
						<label for="exampleEmailInput">ID de usuario</label>
				</div>
				<div class="myinput">
						<input class="u-full-width" type="text" placeholder="ingrese ID" id="txtName">
						</div>
				</div>
			    
				<div class="mybutton">
					<input class="button-primary" type="submit" value="Enviar">
					<input class="button-primary" type="reset" value="Reset">
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
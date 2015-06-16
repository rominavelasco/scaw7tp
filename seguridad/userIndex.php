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
  ------------------------------------------------------------------------E-->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>
	<!-- Comienzo de Encabezado
	------------------------------------------------------------------------E-->
	<div class="encabezado"> 
			<ul class="navbar">
				<li class="navbar2"><a class="navbar3" href="index.php">Home</a></li>
				<li class="navbar2"><a class="navbar3" href="userUpload.php">Upload</a></li>
			</ul>
	</div>
				  
	<!-- Comienzo zona enlaces de archivos
	------------------------------------------------------------------------E-->			  
	<div class="container1">  
		<div class="enlacesArchivos">
		<h4>Archivos Subidos</h4>
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
		
	<!-- Comienzo zona comentarios
	------------------------------------------------------------------------E-->
	<div class="comments">
	
	<div class="zonaComentarios">
	<h4>Comentarios</h4>
		<div class="comment">
	        <div class="avatar">
				<img src="images/avatar.jpg" alt="avatar">
            </div>
			
			<div class="userComment">
			<p>	Esqueleto tiene una serie de pequenios clases de utilidad que action como ayudantes de facil uso. A veces es mejor usar una clase de utilidad de crear una clase completamente nueva solo para flotar un elemento.</p>
			</div>
		</div>			
			
		<div class="comment">
	        <div class="avatar">
				<img src="images/avatar.jpg" alt="avatar">
            </div>
			
			<div class="userComment">
			<p>	Esqueleto tiene una serie de pequenios clases de utilidad que action como ayudantes de facil uso. A veces es mejor usar una clase de utilidad de crear una clase completamente nueva solo para flotar un elemento.</p>
			</div>
		</div>	
			
		<div class="comment">
	        <div class="avatar">
				<img src="images/avatar.jpg" alt="avatar">
            </div>
			
			<div class="userComment">
			<p>	Esqueleto tiene una serie de pequenios clases de utilidad que action como ayudantes de facil uso. A veces es mejor usar una clase de utilidad de crear una clase completamente nueva solo para flotar un elemento.</p>
			</div>
		</div>	
		
		<?php
			echo  '<div class="comment"> <div class="avatar"> <img src="images/avatar.jpg" alt="avatar"> </div>
			       <div class="userComment">
			       <p> comentario contenido entre codigo php </p>
			       </div>
		           </div>	' ;
		?>		
				
			
			<!--<ul class="userComments">
				<li class="Ucomment">Esqueleto tiene una serie de pequeñas clases de utilidad que actúan como ayudantes de fácil uso. A veces es mejor usar una clase de utilidad de crear una clase completamente nueva sólo para flotar un elemento.</li>
				<li class="Ucomment">Esqueleto tiene una serie de pequeñas clases de utilidad que actúan como ayudantes de fácil uso. A veces es mejor usar una clase de utilidad de crear una clase completamente nueva sólo para flotar un elemento.</li>
				<li class="Ucomment">Esqueleto tiene una serie de pequeñas clases de utilidad que actúan como ayudantes de fácil uso. A veces es mejor usar una clase de utilidad de crear una clase completamente nueva sólo para flotar un elemento.</li>
				</ul> -->
	
		<div class="form1">
			<form>
				<div class="myForm1">
						<div class="mylabel1">
							<label for="exampleMessage">Ingrese su Comentario</label>
						</div>
						<div class="myTextarea">
							<textarea class="u-full-width" placeholder="Comentario E id="exampleMessage"></textarea>
						</div>
				</div>
				<div class="mybutton1">
					<input class="button-primary" type="submit" value="Enviar">
					<input class="button-primary" type="reset" value="Reset">
			    </div>
			
			</form>
		</div>
	
	</div><!-- fin div contenedor --> 
	</div>
	</div>
	<!-- cominezo de pie de pagina
	  ------------------------------------------------------------------------ -->
	<div class="footer"> <!-- comienzo div footer -->
    <p class="textpie"> Tecnicatura Desarollo Web &#47; Seguridad y Calidad en las Aplicaciones Web &#47; 1C2015</p> 
	</div>		
  		
  
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Archivos</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <!--<link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link href="css/font-releway.css" rel="stylesheet" type="text/css">-->
  <link href="css/font.css" rel="stylesheet" type="text/css">
  
  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/mystyle.css">
  <link rel="stylesheet" type="text/css" href="css/estilosdos.css">
  <!-- Favicon
  ––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>
	<!-- Comienzo de Encabezado
	––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<div class="encabezado"> 
			<ul class="navbar">
				<li class="navbar2"><a class="navbar3" href="index.html">Home</a></li>
				<li class="navbar2"><a class="navbar3" href="sesion.html">Login</a></li>
			</ul>
	</div>
				  
	<!-- Comienzo zona enlaces de archivos
	––––––––––––––––––––––––––––––––––––––––––––––––– -->			  
	<div class="container1">  
		<div class="enlacesArchivos">
		<h4>Archivos Subidos</h4>
		<div class="archivos">
			
			<ul class="archivo">
				<li class="enlace"><a class="enlace1" href="#home">Introducir nombre de archivo o ubicacion de archivo</a></li>
				<li class="enlace"><a class="enlace1" href="#home">Introducir nombre de archivo o ubicacion de archivo</a></li>
				<li class="enlace"><a class="enlace1" href="#home">Introducir nombre de archivo o ubicacion de archivo</a></li>
				<li class="enlace"><a class="enlace1" href="#home">Introducir nombre de archivo o ubicacion de archivo</a></li>
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
	––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<div class="comments">
	
	<div class="zonaComentarios">
	<h4>Subir archivo</h4>
		
		<div class="form1">
				<!-- El tipo de codificación de datos, enctype, se DEBE especificar como a continuación -->
				<form enctype="multipart/form-data" action="upload.php" method="POST">
				<!-- MAX_FILE_SIZE debe preceder el campo de entrada de archivo -->
					<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
				<!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
				Enviar este archivo: <input name="userfile" type="file" />
				<input type="submit" value="Send File" />
				</form>
				
				<!--<div class="myForm1">
						<div class="mylabel1">
							<label for="exampleMessage">Ingrese su Comentario</label>
						</div>
						<div class="myTextarea">
							<textarea class="u-full-width" placeholder="Comentario …" id="exampleMessage"></textarea>
						</div>
				</div>
				<div class="mybutton1">
					<input class="button-primary" type="submit" value="Enviar">
					<input class="button-primary" type="reset" value="Reset">
			    </div> -->  
			
			
		</div>

	<?php
//tomo el valor de un elemento de tipo texto del formulario 
//$cadenatexto = $_POST["cadenatexto"]; 
//echo "Escribió en el campo de texto: " . $cadenatexto . "<br><br>"; 

//datos del arhivo 
$nombre_archivo = $_FILES['userfile']['name']; 
$tipo_archivo = $_FILES['userfile']['type']; 
$tamano_archivo = $_FILES['userfile']['size']; 
//compruebo si las características del archivo son las que deseo 
if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 100000))) { 
   	echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .gif o .jpg<br><li>se permiten archivos de 100 Kb máximo.</td></tr></table>"; 
}else{ 
   	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $nombre_archivo)){ 
      	 echo "El archivo ha sido cargado correctamente."; 
   	}else{ 
      	 echo "Ocurrió algún error al subir el fichero. No pudo guardarse."; 
   	} 
} 
?>
	
	
	
	
	
	
	
	
	
	
	</div><!-- fin div contenedor --> 
	</div>
	</div>
	<!-- cominezo de pie de pagina
	  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<div class="footer"> <!-- comienzo div footer -->
    <p class="textpie"> Tecnicatura Desarollo Web &#47; Seguridad y Calidad en las Aplicaciones Web &#47; 1C2015</p> 
	</div>		
  		
  
</body>
</html>

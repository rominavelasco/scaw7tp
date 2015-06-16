<?php
// En versiones de PHP anteriores a 4.1.0, $HTTP_POST_FILES debe utilizarse en lugar
// de $_FILES.

/*$uploaddir = '/seguridad/uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "El archivo es válido y fue cargado exitosamente.\n";
} else {
    echo "¡Posible ataque de carga de archivos!\n";
}

echo 'Aquí hay más información de depurado:';
print_r($_FILES);

print "</pre>";*/


//tomo el valor de un elemento de tipo texto del formulario 
//$cadenatexto = $_POST["cadenatexto"]; 
//echo "Escribió en el campo de texto: " . $cadenatexto . "<br><br>"; 

//datos del arhivo 
$nombre_archivo = $_FILES['userfile']['name']; 
$tamano_archivo = $_FILES['userfile']['size']; 
$uploaddir = '/uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

//compruebo si las características del archivo son las que deseo 
if ($tamano_archivo > 30000) { 
   	echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .gif o .jpg<br><li>se permiten archivos de 100 Kb máximo.</td></tr></table>"; 
}else{ 
   	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){ 
      	 echo "El archivo ha sido cargado correctamente."; 
   	}else{ 
      	 echo "Ocurrió algún error al subir el fichero. No pudo guardarse."; 
   	} 
} 





?>
	
<?php
include 'conexion.php';
$nombre_enfermedad = $_POST['nombre_enfermedad']; 
$descripcion = $_POST['descripcion']; 
$con=new Conexion();
$conectar=$con->con();
if(!empty($nombre_enfermedad) && !empty($descripcion)){
	echo "Correcto;";
	$sSQL=$conectar->query("INSERT INTO enfermedades(nombre_enfermedad, descripcion) VALUES ('$nombre_enfermedad', '$descripcion')"); 
    if($sSQL){
      echo '<p>Los datos han sido dados de alta con exito.</p> ';
      header( "refresh:1; url=lista_Enfermedades.php" ); 
    }else{
      echo 'Checa los datos'.$conectar->error; 
    }
 }else{
    echo '<p>Por favor ponte en contacto con el admin.</p> '; 
 }

?>
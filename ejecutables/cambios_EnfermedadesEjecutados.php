<?php
include 'conexion.php';
$id_enfermedad = $_POST['id_enfermedad']; 
$nombre_enfermedad = $_POST['nombre_enfermedad']; 
$descripcion = $_POST['descripcion']; 
$con=new Conexion();
$conectar=$con->con();
if(!empty($id_enfermedad) && !empty($nombre_enfermedad) && !empty($descripcion)){
	echo "Correcto;";
	$sSQL=$conectar->query("UPDATE enfermedades Set nombre_enfermedad='$nombre_enfermedad', descripcion='$descripcion' WHERE id_enfermedad = '$id_enfermedad'"); 
    if($sSQL){
      echo '<p>Los datos han sido actualizados con exito.</p> ';
      header( "refresh:1; url=lista_Enfermedades.php" ); 
    }else{
      echo 'Checa los datos'.$conectar->error; 
    }
 }else{
    echo '<p>Por favor ponte en contacto con el admin.</p> '; 
 }

?>
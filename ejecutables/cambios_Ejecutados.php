<?php
include 'conexion.php';
$id_paciente = $_POST['id_paciente']; 
$apellido_p = $_POST['apellido_paterno']; 
$apellido_m = $_POST['apellido_materno']; 
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$enfermedad = $_POST['enfermedad'];
$con=new Conexion();
$conectar=$con->con();
if(!empty($id_paciente) && !empty($apellido_p) && !empty($apellido_m) && !empty($nombre) && !empty($edad) && !empty($enfermedad)){
	echo "Correcto;";
	$sSQL=$conectar->query("UPDATE pacientes Set apellido_paterno='$apellido_p', apellido_materno='$apellido_m', nombre='$nombre', edad='$edad', id_enfermedad='$enfermedad' WHERE id_paciente = '$id_paciente'"); 
    if($sSQL){
      echo '<p>Los datos han sido actualizados con exito.</p> ';
      header( "refresh:1; url=lista_Pacientes.php" ); 
    }else{
      echo 'Checa los datos'.$conectar->error; 
    }
 }else{
    echo '<p>Por favor ponte en contacto con el admin.</p> '; 
 }

?>
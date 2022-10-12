<?php  
require 'conexion.php';
$con = new Conexion;
$conectar = $con->con();
$id_paciente = $_GET['id_getpaciente'];
if(isset($id_paciente)){
	$resultado = $conectar->query("DELETE FROM pacientes WHERE id_paciente = '$id_paciente'");
	header( "refresh:1; url=lista_Pacientes.php" );
}else{
      echo 'Checa los datos'.$conectar->error; 
}
?>
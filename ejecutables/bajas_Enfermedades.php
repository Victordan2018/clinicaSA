<?php  
require 'conexion.php';
$con = new Conexion;
$conectar = $con->con();
$id_enfermedad = $_GET['id_getenfermedad'];
if(isset($id_enfermedad)){
	$resultado = $conectar->query("DELETE FROM enfermedades WHERE id_enfermedad = '$id_enfermedad'");
	header( "refresh:1; url=lista_Enfermedades.php" );
}else{
      echo 'Checa los datos'.$conectar->error; 
}
?>
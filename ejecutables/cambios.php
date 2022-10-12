<?php  
include 'conexion.php';
include_once 'header.php';
$con = new Conexion;
$conectar = $con->con();
$id_getpaciente = $_GET['id_getpaciente'];
$consulta = $conectar->query("SELECT * FROM pacientes WHERE id_paciente = '$id_getpaciente'");
$consulta_Enfermedad = $conectar->query("SELECT * FROM enfermedades ORDER BY id_enfermedad");
//
foreach ($consulta as $datos){
		?>
		<div class="container" align="center">
			<h1>Ingresa los datos que se te piden para actualizar el paciente </h1>
			<div class="div-3">
				<form action="cambios_Ejecutados.php" method="post" name="act">
				  <p>
				  <input type="hidden" name="id_paciente" id="textfield" value="<?php echo $datos['id_paciente'];?>" />
				  </p>
				  <p>Apellido paterno</p>
				  <p>
				  <label for="apellido_paterno"></label>
				  <input type="text" name="apellido_paterno" id="textfield2" value="<?php echo $datos['apellido_paterno'];?>"/>
				  </p>
				  <p>Apellido materno</p>
				  <p>
				  <label for="apellido_materno"></label>
				  <input type="text" name="apellido_materno" id="textfield3" value="<?php echo $datos['apellido_materno'];?>"/>
				  </p>
				  <p>Nombre</p>
				  <p>
				  <label for="nombre"></label>
				  <input type="text" name="nombre" id="textfield4" value="<?php echo $datos['nombre'];?>"/>
				  </p>
				  <p>Edad</p>
				  <p>
				  <label for="edad"></label>
				  <input type="text" name="edad" id="textfield5" value="<?php echo $datos['edad'];?>"/>
				  </p>
				  <p>Selecciona enfermedad</p>
				  <p>
				  <label for="enfermedad"></label>
				  <select name="enfermedad">
				  	<option value="0">Seleccione:</option>
				  	<?php 
				  	while($valores = mysqli_fetch_array($consulta_Enfermedad)){
				  		echo '<option value="'.$valores['id_enfermedad'].'">'.$valores['nombre_enfermedad'].'</option>';
				  	}
				  	?>
				  </select>
				  </p>
				  <p>
				  <input class="btn_usuario" type="submit" name="btn" id="button" value="Enviar" />
				  </p>
				</form>
			</div>
		</div>
<?php 
}
$conectar->close();
include_once 'footer.php';?>
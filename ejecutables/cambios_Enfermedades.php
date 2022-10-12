<?php  
include 'conexion.php';
include_once 'header.php';
$con = new Conexion;
$conectar = $con->con();
$id_getenfermedad = $_GET['id_getenfermedad'];
$consulta = $conectar->query("SELECT * FROM enfermedades WHERE id_enfermedad = '$id_getenfermedad'");
//
foreach ($consulta as $datos){
		?>
		<div class="container" align="center">
			<h1>Ingresa los datos que se te piden para actualizar la enfermedad </h1>
			<div class="div-3">
				<form action="cambios_EnfermedadesEjecutados.php" method="post" name="act">
				  <p>
				  <input type="hidden" name="id_enfermedad" id="textfield" value="<?php echo $datos['id_enfermedad'];?>" />
				  </p>
				  <p>Nombre</p>
				  <p>
				  <label for="nombre_enfermedad"></label>
				  <input type="text" name="nombre_enfermedad" id="textfield2" value="<?php echo $datos['nombre_enfermedad'];?>"/>
				  </p>
				  <p>Descripcion</p>
				  <p>
				  <label for="descripcion"></label>
				  <textarea type="text" name="descripcion" id="textfield3"><?php echo $datos['descripcion'];?></textarea>
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
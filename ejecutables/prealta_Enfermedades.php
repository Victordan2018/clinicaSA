<?php  
include 'conexion.php';
include_once 'header.php';
$con = new Conexion;
$conectar = $con->con();
//
?>
		<div class="container" align="center">
			<h1>Ingresa los datos que se te piden para actualizar la enfermedad </h1>
			<div class="div-3">
				<form action="alta_Enfermedades.php" method="post" name="act">
				  <p>
				  <input type="hidden" name="id_enfermedad" id="textfield" value="" />
				  </p>
				  <p>Nombre</p>
				  <p>
				  <label for="nombre_enfermedad"></label>
				  <input type="text" name="nombre_enfermedad" id="textfield2" value=""/>
				  </p>
				  <p>Descripcion</p>
				  <p>
				  <label for="descripcion"></label>
				  <textarea type="text" name="descripcion" id="textfield3"></textarea>
				  </p>
				  <p>
				  <input class="btn_usuario" type="submit" name="btn" id="button" value="Enviar" />
				  </p>
				</form>
			</div>
		</div>
<?php 
$conectar->close();
include_once 'footer.php';?>
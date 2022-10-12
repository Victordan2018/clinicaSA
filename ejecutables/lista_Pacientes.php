<?php
include 'conexion.php';
include_once 'header.php';
$con = new Conexion;
$conectar = $con->con();
$consulta = $conectar->query("SELECT * FROM pacientes INNER JOIN enfermedades ON pacientes.id_enfermedad = enfermedades.id_enfermedad ORDER BY id_paciente");
?>
	<br>
	<h3 align="center">Pacientes</h3>
	<div align="center" class="div">
    	<div>
			<a title="Crear pacientes" href="prealta_Pacientes.php"><img src="../img/proteccion.png" alt="Crear pacientes" width="60" height="60" /></a>&nbsp;&nbsp;
		</div>
    <table width="90%" border="2">
		<thead>
			<tr>
				<th ><h3>Id_Paciente</h3></th>
				<th ><h3>Apellido paterno</h3></th>
				<th ><h3>Apellido materno</h3></th>
				<th ><h3>Nombre</h3></th>
				<th ><h3>Edad</h3></th>
				<th ><h3>Enfermedad</h3></th>
                <th ><h3>Descripcion</h3></th>
                <th ><h3>Actualizar paciente</h3></th>
                <th ><h3>Eliminar paciente</h3></th>
			</tr>
		</thead>
		<tbody>
			<?php  
			while ($dato = mysqli_fetch_array($consulta)) {
			?>
			<tr>
				<td><h4><?php echo $dato['id_paciente'];?></h4></td>
				<td><h4><?php echo $dato['apellido_paterno'];?></h4></td>
				<td><h4><?php echo $dato['apellido_materno'];?></h4></td>
				<td><h4><?php echo $dato['nombre'];?></h4></td>
				<td><h4><?php echo $dato['edad'];?></h4></td>
				<td><h4><?php echo $dato['nombre_enfermedad'];?></h4></td>
				<td><h4><?php echo $dato['descripcion'];?></h4></td>
				<td><a href="cambios.php?id_getpaciente=<?php echo $dato['id_paciente'];?>"> <p align="center"><img align=center width="35" height="35" src="../img/editar.png"/>  </p></a></td>
	            <td><a href="bajas.php?id_getpaciente=<?php echo $dato['id_paciente'];?>">  <p align="center"><img width="35" height="35" src="../img/borrar.png"/></p></a></td>
	  <?php }?>
            </tr>
		</tbody>
	</table>
	</div>
<?php  
include_once 'footer.php';?>

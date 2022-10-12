<?php
include 'conexion.php';
include_once 'header.php';
$con = new Conexion;
$conectar = $con->con();
$consulta = $conectar->query("SELECT * FROM enfermedades ORDER BY id_enfermedad");
?>
	<br>
	<h3 align="center">Enfermedades</h3>
	<div align="center" class="div">
		<div >
			<a title="Crear enfermedades" href="prealta_Enfermedades.php"><img src="../img/bacterias.png" alt="Crear enfermedad" width="60" height="60" /></a>&nbsp;&nbsp;
		</div>
	
    <table width="90%" border="2">
		<thead>
			<tr>
				<th ><h3>Id enfermedad</h3></th>
				<th ><h3>Nombre</h3></th>
                <th ><h3>Descripcion</h3></th>
                <th ><h3>Actualizar enfermedad</h3></th>
                <th ><h3>Eliminar enfermedad</h3></th>
			</tr>
		</thead>
		<tbody>
			<?php  
			while ($dato = mysqli_fetch_array($consulta)) {
			?>
			<tr>
				<td><h4><?php echo $dato['id_enfermedad'];?></h4></td>
				<td><h4><?php echo $dato['nombre_enfermedad'];?></h4></td>
				<td><h4><?php echo $dato['descripcion'];?></h4></td>
				<td><a href="cambios_Enfermedades.php?id_getenfermedad=<?php echo $dato['id_enfermedad'];?>"> <p align="center"><img align=center width="35" height="35" src="../img/editar.png"/>  </p></a></td>
	            <td><a href="bajas_Enfermedades.php?id_getenfermedad=<?php echo $dato['id_enfermedad'];?>">  <p align="center"><img width="35" height="35" src="../img/borrar.png"/></p></a></td>
	  <?php }?>
            </tr>
		</tbody>
	</table>
    </div>
<?php  
include_once 'footer.php';?>

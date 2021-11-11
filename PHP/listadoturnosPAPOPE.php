
.<?php
		require_once "papopeconexion.php";
		include "menuUSUARIO.php";
?>
<h1 class="titulos">Turnos</h1>
<?php

		$sql= "SELECT *
			FROM turnos
			WHERE cuenta_id = ".$_SESSION['id_cuenta']." AND turno_deleted_at IS NULL";

		$res = consulta($conn, $sql);



?>
<table border="1" class="listturn">
	<tr>
		<th>dia</th>
		<th>hora</th>
		<th>acciones</th>
		
	</tr>
	<?php while($fila = mysqli_fetch_assoc($res)){ ?>
	<tr>
		<td><?php echo $fila['dia_turno']; ?></td>
		<td><?php echo $fila['hora_turno']; ?></td>
		<td>editar | <a href="turnoseliminarPAPOPE.php?turnos_id=<?php echo $fila['turno_id'];?>">eliminar </a></td>

		
	</tr>
	<?php } ?>
</table>
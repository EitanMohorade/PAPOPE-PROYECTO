
.<?php
		require_once "papopeconexion.php";
		include "menuUSUARIO.php";
?>
<h1 class="titulos">turnos</h1>
<?php

		$sql= "SELECT *
			FROM turnos
			WHERE usuario_id = ".$_SESSION['usuario_id'];

		$res = consulta($conn, $sql);



?>
<table border="1">
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
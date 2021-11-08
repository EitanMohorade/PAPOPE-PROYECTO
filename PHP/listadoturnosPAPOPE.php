<?php
		require_once "papopeconexion.php";
		include "menuPAPOPE.php";
?>
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

		
	</tr>
	<?php while($fila = mysqli_fetch_assoc($res)){ ?>
	<tr>
	
		<td><?php echo $fila['dia_turno']; ?></td>
		<td><?php echo $fila['hora_turno']; ?></td>
		
	</tr>
	<?php } ?>
</table>
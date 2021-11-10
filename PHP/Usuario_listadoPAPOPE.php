<?php
//TODO ESTO ES PARA LOS ADMINS
require_once "papopeconexion.php";
include "menuPAPOPE.php";

?>
<h1 class="titulos">Listado de Usuarios</h1>


<?php


$sql = "SELECT * 
		FROM usuarios ";

$res = consulta($conn, $sql);


?>
<table>
	<tr>
		<th>id</th>
		<th>email</th>
		<th>Nombre</th>
		<th>apellido</th>
		<th>telefono</th>
		
	</tr>
	<?php while($fila = mysqli_fetch_assoc($res)){ ?>
	<tr>
		<td><?php echo $fila['usuario_id']; ?></td>
		<td><?php echo $fila['email_usuario']; ?></td>
		<td><?php echo $fila['nombre_usuario']; ?></td>
		<td><?php echo $fila['apellido_usuario']; ?></td>
		<td><?php echo $fila['telefono_usuario']; ?></td>
		
		
	</tr>
	<?php } ?>
</table>

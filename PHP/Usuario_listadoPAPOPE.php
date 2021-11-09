<?php
//TODO ESTO ES PARA LOS ADMINS
require_once "papopeconexion.php";
include "menuPAPOPE.php";

?>
<h1 class="titulos">Listado de Usuarios</h1>


<?php


$sql = "SELECT * 
		FROM usuarios 
		WHERE nombre_usuario LIKE '%" . $_SESSION['nombre_usuario'] . "%' AND
		apellido_usuario LIKE '%" . $_SESSION['apellido_usuario'] . "%' AND
		(telefono_usuario LIKE '%" .$_SESSION['telefono_usuario']. "%' OR telefono_usuario IS NULL) AND
		email_usuario LIKE '%" .$_SESSION['email_usuario']. "%'";

$res = consulta($conn, $sql);


?>
<table border="1">
	<tr>
		<th>id</th>
		<th>Nombre</th>
		<th>apellido</th>
		<th>telefono</th>
		<th>email</th>
		
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

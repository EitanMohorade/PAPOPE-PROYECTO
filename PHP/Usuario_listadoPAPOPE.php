<?php
require_once "papopeconexion.php";
$_GET['nombre_usuario'] = (isset($_GET['nombre_usuario'])) ? $_GET['nombre_usuario'] : "";
$_GET['apellido_usuario'] = (isset($_GET['apellido_usuario'])) ? $_GET['apellido_usuario'] : "";
$_GET['telefono_usuario'] = (isset($_GET['telefono_usuario'])) ? $_GET['telefono_usuario'] : "";
$_GET['email_usuario'] = (isset($_GET['email_usuario'])) ? $_GET['email_usuario'] : "";


include "menuPAPOPE.php";
include "stykePAPOPE.php";
?>
<h1 class="titulo-usuario">Listado de Usuarios</h1>
<form action="usuario_listadoPAPOPE.php" method="GET">
	Nombre: <input name="nombre_usuario" value="<?php echo $_GET['nombre_usuario']; ?>"> |/| 
	apellido: <input name="apellido_usuario" value="<?php echo $_GET['apellido_usuario']; ?>"> |/| 
	telefono: <input name="telefono_usuario" value="<?php echo $_GET['telefono_usuario']; ?>"> |/| 
	email: <input name="email_usuario" value="<?php echo $_GET['email_usuario']; ?>"> 
	<input type="submit"> 
</form>

<?php


$sql = "SELECT * 
		FROM usuarios 
		WHERE nombre_usuario LIKE '%" . $_GET['nombre_usuario'] . "%' AND
		apellido_usuario LIKE '%" . $_GET['apellido_usuario'] . "%' AND
		(telefono_usuario LIKE '%" .$_GET['telefono_usuario']. "%' OR telefono_usuario IS NULL) AND
		email_usuario LIKE '%" .$_GET['email_usuario']. "%'";

$res = consulta($conn, $sql);


?>
<table border="1">
	<tr>
		<th>Nombre</th>
		<th>apellido</th>
		<th>telefono</th>
		<th>email</th>
		
	</tr>
	<?php while($fila = mysqli_fetch_assoc($res)){ ?>
	<tr>
		<td><?php echo $fila['nombre_usuario']; ?></td>
		<td><?php echo $fila['apellido_usuario']; ?></td>
		<td><?php echo $fila['telefono_usuario']; ?></td>
		<td><?php echo $fila['email_usuario']; ?></td>
		
	</tr>
	<?php } ?>
</table>

<html>
<head>
  <link rel="stylesheet" href="stylePAPOPE.css">
</head>
<?php
//TODO ESTO ES PARA LOS ADMINS
require_once "papopeconexion.php";
include "menuUSUARIO.php";
?>
<h1 class="titulos">Listado de cuentas</h1>


<?php


$sql = "SELECT * 
		FROM cuentas ";

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
		<td><?php echo $fila['id_cuenta']; ?></td>
		<td><?php echo $fila['contacto_cuenta']; ?></td>
		<td><?php echo $fila['nombre_cuenta']; ?></td>
		<td><?php echo $fila['apellido_cuenta']; ?></td>
		<td><?php echo $fila['telefono_cuenta']; ?></td>
		
		
	</tr>
	<?php } ?>
</table>
</html>
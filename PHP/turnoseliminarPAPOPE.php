<?php

require_once"papopeconexion.php";

if(!isset($_seshon['turnos_id'])){
	exit("Falta el campo");
}
$sql = "UPDATE turnos SET turno_deleted_at = NOW() WHERE officeCode = '".$_GET['turnos_id']."'";
consulta($conn,$sql);
header("Location: listaturnosPAPOPE.php")





?>

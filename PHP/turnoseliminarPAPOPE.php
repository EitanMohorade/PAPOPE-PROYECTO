<?php

require_once"papopeconexion.php";
include "menuUSUARIO.php";

if(!isset($_GET['turno_id'])){
	exit("Falta el campo");
}
$sql = "UPDATE turnos SET turno_deleted_at = NOW() WHERE turno_id = '".$_GET['turno_id']."'";
consulta($conn,$sql);
header("Location: listadoturnosPAPOPE.php");
?>
	
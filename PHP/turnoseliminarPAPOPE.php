<?php

require_once"papopeconexion.php";

if(!isset($_seshon['turnos_id'])){
	exit("Boludito");
}
$sql = "UPDATE turnos SET turno_deleted_at = NOW()  ";
consulta($conn,$sql);
header("Location: listaturnosPAPOPE.php")





?>

<?php
require_once "papopeconexion.php";
include "menuPAPOPE.php";
?>
<form method="POST">
Nombre: <input type="text" name="nom_reg">
<br>
Apellido: <input type="text" name="apel_reg">
<br>
Email (Obligatorio): <input type="text" name="em_reg">
<br>
Contraseña: <input type="password" name="pass_reg">
<br>
Telefono: <input type="text" name="tel_reg">
<br>
<input type="submit">
</form>
<?php
$sql = "INSERT INTO usuarios VALUES (NULL, '".$_POST["nom_reg"]."', '".$_POST["apel_reg"]."', '".$_POST["em_reg"]."', '".$_POST["pass_reg"]."', '".$_POST["tel_reg"]."', NULL)";

$res = consulta($conn, $sql);



?>


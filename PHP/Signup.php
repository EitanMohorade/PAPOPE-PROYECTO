<?php
require_once "papopeconexion.php";
include "menuUSUARIO.php";
?>
<form method="POST">
Nombre: <input type="text" name="nom_reg" required>
<br>
Apellido: <input type="text" name="apel_reg" required>
<br>
Email: <input type="text" name="em_reg" required>
<br>
Contraseña: <input type="password" name="pass_reg" required>
<br>
Telefono: <input type="text" name="tel_reg" required>
<br>
<input type="submit">
</form>
<?php
if(count($_POST)>0){
$sql = "INSERT INTO cuentas 
		VALUES 
		(NULL, 1, '" 
		.$_POST["nom_reg"]."', '"
		.$_POST["apel_reg"]."', '"
		.$_POST["em_reg"]."', '"
		.$_POST["pass_reg"]."', '"
		.$_POST["tel_reg"]."'
		, NULL)";
		

$res = consulta($conn, $sql);

header('Location: loginPAPOPE.php');
}

?>


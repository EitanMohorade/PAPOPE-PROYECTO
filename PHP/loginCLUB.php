<?php

require_once "papopeconexion.php";
$error = "";
if(isset($_POST['password_usuario']) && isset($_POST['email_usuario'])){
    $sql = "SELECT * 
            FROM usuarios 
            WHERE password_usuario='".$_SESSION['password_usuario']."' 
            AND email_usuario='".$_SESSION['info_contacto']."'";
            
    $res = consulta($conn, $sql);

    if(1 == mysqli_num_rows($res)){
        $_SESSION = mysqli_fetch_assoc($res);
        header('Location: Usuario_listadoPAPOPE.php');
    }else{
        $error = "Usuario incorrecto y/o clave";
    }
}

include "menuUSUARIO.php";
include "menuCLUB.php";

?>
<form method="POST">
    <table>
        <tr>
            <td>Correo:</td>
            <td><input type="text" name="info_contacto"></td>
        </tr>
        <tr>
            <td>Clave:</td>
            <td><input type="password" name="password_usuario"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit"></td>
        </tr>
        <tr>
            <td colspan="2"><?php echo $error; ?></td>
        </tr>
    </table>
</form>
<?php
?>
<?php

require_once "papopeconexion.php";
$error = "";
if(isset($_POST['password_cuenta']) && isset($_POST['contacto_cuenta'])){
    $sql = "SELECT * 
            FROM cuentas 
            WHERE password_cuenta='".$_SESSION['password_cuenta']."' 
            AND contacto_cuenta='".$_SESSION['contacto_cuenta']."'";
            
    $res = consulta($conn, $sql);

    if(1 == mysqli_num_rows($res)){
        $_SESSION = mysqli_fetch_assoc($res);
        header('Location: Usuario_listadoPAPOPE.php');
    }else{
        $error = "Usuario incorrecto y/o clave";
    }
}

include "menuUSUARIO.php";


?>
<form method="POST">
    <table>
        <tr>
            <td>Correo:</td>
            <td><input type="text" name="contacto_cuenta"></td>
        </tr>
        <tr>
            <td>Clave:</td>
            <td><input type="password" name="password_cuenta"></td>
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
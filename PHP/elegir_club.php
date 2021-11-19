<?php

    require_once("papopeconexion.php");
    include("menuUSUARIO.php");
    
?>

<form action="elegir_dia.php" method="POST">

    Club: <select name="club">
    
        <?php 

            $sql = "SELECT DISTINCT nombre_cuenta FROM cuentas WHERE tipo_id_cuenta = '2'";
            $res = consulta($conn, $sql);
            while($fila = mysqli_fetch_assoc($res)){
            echo "<option>" . $fila['nombre_cuenta'] . "</option>";

        }?>
    </select><br><br>

    <input type="submit" value="Elegir dia">

</form>
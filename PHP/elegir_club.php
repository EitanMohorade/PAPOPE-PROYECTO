<?php

    require_once("papopeconexion.php");
    include("menuUSUARIO.php");

?>

<form action="elegir_dia.php" method="post">

    <select name="club">
    
        <?php 

            $sql = "SELECT DISTINCT nombre_cuenta FROM pedir_turno";
            $res = consulta($conn, $sql);
            while($fila = mysqli_fetch_assoc($res)){
            echo "<option>" . $fila['nombre_cuenta'] . "</option>";

        }?>

    </select><br><br>

    <input type="submit" value="Pedir Turno">

</form>
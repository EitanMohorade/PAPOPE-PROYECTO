<?php

    require_once("papopeconexion.php");

?>

<form action="post">

    Día: <input type="text"><br><br>
    Horario: <input type="text"><br><br>
    <select>
    
        <?php 
        
        $sql = "SELECT `nombre_cuenta` FROM `cuentas` WHERE tipo_id_cuenta = 2";
        $res = mysqli_query($conn, $sql);
        while($fila = mysqli_fetch_assoc($res)){
            echo "<option>" . $fila['nombre_club'] . "</option>";
        }?>

    </select>
    <input type="submit">
</form>

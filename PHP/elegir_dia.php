<?php

    require_once("papopeconexion.php");
    include("menuUSUARIO.php");
    
?>

<form action="elegir_hora.php" method="POST">

    Día: <select name="dia">
    
        <?php 

            $sql = "SELECT DISTINCT dia_habil FROM tiempo_disponible WHERE nombre_cuenta LIKE '%" . $_POST['club'] . "%'";
            $res = consulta($conn, $sql);
            while($fila = mysqli_fetch_assoc($res)){
            echo "<option>" . $fila['dia_habil'] . "</option>";

        }?>
    </select><br><br>

    <input type="submit" value="Elegir horario de entrada y salida">

</form>